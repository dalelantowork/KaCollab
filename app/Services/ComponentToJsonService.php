<?php

namespace App\Services;

class ComponentToJsonService
{
    private $data = [];
    private $components = [];
    private $path = '/forms';

    public function switchFormat($data)
    {
        $this->components = @$data['components'] ?: [];

        if (!$this->components) {
            return false;
        }

        return $this->convertComponents();
    }

    public function getAllJsonFileNames()
    {
        $path = public_path($this->path);
        $filesInFolder = \File::files($path);     

        $fileNames = [];

        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            $fileNames[] = $file['filename'] ;
        }

        return $fileNames;
    }

    public function getJsonFile($fileName)
    {
        try {
            $path = public_path("{$this->path}/{$fileName}.json");
            return json_decode(file_get_contents($path, true));
        } catch (\Exception $e) {
            return null;
        }
    }

    private function convertComponents()
    {
        $components = $this->components;
        $convertedArray = [];
        $radio = [];
        $checkbox = [];
        $withOptionLabel = '';
        // Concreate Slab and Bricks
        foreach ($components as $fieldName => $component) {
            $mainContent = @$component[0];


            if (!$mainContent) {
                continue;
            }


            if ("select" == $mainContent->type) {
                $convertedArray[] = $this->selectOptionJsonFormat($mainContent);
                continue;
            }

            $optionLabel = @explode('_', $fieldName)[0];

            if ('radio' == $mainContent->type) {
                $convertedArray[] = $this->checkBoxJsonFormat($component, 'radio');
                continue;
            }

            $checkboxFields = [
                'checkbox',
            ];
            if (in_array($mainContent->type, $checkboxFields)) {
                if (!$withOptionLabel) {
                    $withOptionLabel = $optionLabel;
                }
                $checkbox[] = $mainContent;
                continue;
            }

            if ($checkbox) {
                $convertedArray[] = $this->checkBoxJsonFormat($checkbox, 'checkbox');
                $withOptionLabel = '';
                $checkbox = [];
            }

            $sameField = [
                'text',
                'date',
                'textarea',
                'number',
                'hidden',
            ];

            if (!in_array($mainContent->type, $sameField)) {
                continue;
            }
            $convertedArray[] = $this->jsonFormat($mainContent);
        }

        return $convertedArray; 
    }

    private function selectOptionJsonFormat($component)
    {
        $values = [];
        foreach ($component->options as $option) {
            $values[] = [
                "label" => $option->label,
                "value" => $option->value,
                "selected" => false,
            ];
        }

        return [
            "type" => "select",
            "required" => $component->required,
            "label" => $component->label,
            "className" => "form-control json-generated col-12",
            "name" => $component->name,
            "access" => false,
            "multiple" => false,
            "values" => $values,
        ];
    }

    private function checkBoxJsonFormat($array, $groupType)
    {
        $returnData = [];
        $values = [];
        $firstData = @$array[0];
        foreach ($array as $arrayData) {
            $values[] = [
                'label' => $arrayData->label,
                'value' => $arrayData->value,
                'selected' => false,
            ];
        }

        return [
            "type" => $groupType . "-group",
            "required" => false,
            "label" => '',
            'className' => 'json-generated',
            "toggle" => false,
            "inline" => false,
            "name" => $firstData->name,
            "access" => false,
            "other" => false,
            "values" => $values
        ];
    }

    private function jsonFormat($component)
    {
        return [
            "type"        => $component->type,
            "required"    => $component->required,
            "label"       => $component->label,
            "description" => '',
            "placeholder" => '',
            "className"   => "form-control json-generated col-12",
            "name"        => $component->name,
            "access"      => false,
            "subtype"     => $component->type,
        ];
    }
}