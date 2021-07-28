<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'area'  =>  'Users',
                'title' => 'user_access',
                'description' => 'Can access users'
            ],
            [
                'id'    => 2,
                'area'  =>  'Users',
                'title' => 'user_create',
                'description' => 'Can create users'
            ],
            [
                'id'    => 3,
                'area'  =>  'Users',
                'title' => 'user_edit',
                'description' => 'Can edit users'
            ],
            [
                'id'    => 4,
                'area'  =>  'Users',
                'title' => 'user_delete',
                'description' => 'Can delete users'
            ],
            [
                'id'    => 5,
                'area'  =>  'Activity',
                'title' => 'activity_access',
                'description' => 'Can see activity'
            ],
            [
                'id'    => 6,
                'area'  =>  'Permissions',
                'title' => 'role_access',
                'description' => 'Can access permissions'
            ],
            [
                'id'    => 7,
                'area'  =>  'Permissions',
                'title' => 'role_create',
                'description' => 'Can create permissions'
            ],
            [
                'id'    => 8,
                'area'  =>  'Permissions',
                'title' => 'role_edit',
                'description' => 'Can edit permissions'
            ],
            [
                'id'    => 9,
                'area'  =>  'Permissions',
                'title' => 'role_delete',
                'description' => 'Can delete permissions'
            ],
            [
                'id'    => 10,
                'area'  =>  'Enquiries',
                'title' => 'enquiry_access',
                'description' => 'Can view enquiries'
            ],
            [
                'id'    => 11,
                'area'  =>  'Enquiries',
                'title' => 'enquiry_edit',
                'description' => 'Can edit enquiries'
            ],
            [
                'id'    => 12,
                'area'  =>  'Enquiries',
                'title' => 'enquiry_delete',
                'description' => 'Can delete enquiries'
            ],
            [
                'id'    => 13,
                'area'  =>  'Interactions',
                'title' => 'interaction_access',
                'description' => 'Can access interactions'
            ],
            [
                'id'    => 14,
                'area'  =>  'Interactions',
                'title' => 'interaction_create',
                'description' => 'Can create interactions'
            ],
            [
                'id'    => 15,
                'area'  =>  'Interactions',
                'title' => 'interaction_edit',
                'description' => 'Can edit interactions'
            ],
            [
                'id'    => 16,
                'area'  =>  'Interactions',
                'title' => 'interaction_delete',
                'description' => 'Can delete interactions'
            ],
            [
                'id'    => 17,
                'area'  =>  'Incident Logs',
                'title' => 'incident_access',
                'description' => 'Can access incident logs'
            ],
            [
                'id'    => 18,
                'area'  =>  'Incident Logs',
                'title' => 'incident_create',
                'description' => 'Can create incident logs'
            ],
            [
                'id'    => 19,
                'area'  =>  'Incident Logs',
                'title' => 'incident_edit',
                'description' => 'Can edit incident logs'
            ],
            [
                'id'    => 20,
                'area'  =>  'Incident Logs',
                'title' => 'incident_delete',
                'description' => 'Can delete incident logs'
            ],
        ];

        Permission::insert($permissions);
    }
}
