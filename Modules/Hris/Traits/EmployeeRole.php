<?php

namespace Modules\Hris\Traits;

use Modules\Role\Entities\Role;

trait EmployeeRole
{
    private function getEmployeeRole()
    {
        $role = Role::where('name', 'employee')->first();

        if (empty($role)) {
            $role = Role::create(['name' => 'employee']);
        }

        return $role;
    }
}