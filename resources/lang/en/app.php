<?php

return [
    'install' => [
        'database' => 'Register Your Database',
        'next' => 'Next',
        'submit' => 'Submit',
        'tab' => [
            'user' => 'User',
            'company' => 'Company',
            'database' => 'Database'
        ],
        'placeholder' => [
            'database' => [
                'name' => 'Type Your Database Name',
                'username' => 'Type Your Database Username',
                'password' => 'Type Your Database Password',
            ],
            'user' => [
                'email' => 'Type Your Acount Email',
                'username' => 'Type Your Acount Username',
                'password' => 'Type Your Acount Password',
                'password_confirmation' => 'Confirm Your Account Password'
            ],
            'company' => [
                'business_type' => 'Choose Your Business Type',
                'business_description' => 'Type Your Business Description'
            ]
        ],
    ],
    'profiles' => [
        'column' => [
            'bio' => 'Bio',
            'phone' => 'Phone',
            'address' => 'Address',
            'photo_profile' => 'Photo Profile'
        ]
    ],
    'auth' => [
        'placeholder' => [
            'email' => 'Type your email',
            'password' => 'Type your passwords'
        ],
        'label' => [
            'remember' => 'Remeber Me'
        ]
    ],
    'items' => [
        'title' => 'Item Data',
        'column' => [
            'name' => 'Name',
            'internal_production' => 'Internal Production',
            'category' => [
                'name' => 'Category Name',
            ],
            'unit' => [
                'name' => 'Unit Name'
            ],
            'price' => [
                'selling_price' => 'Selling Price',
                'initial_price' => 'Initial Price'
            ],
            'stock' => [
                'amount' => 'Amount',
                'stock' => 'Stock'
            ]
        ]
    ],
    'purchasings' => [
        'title' => 'Purchasing',
        'column' => [
            'date' => 'Date',
            'payment_method' => 'Payment Method',
            'invoice_number' => 'Invoice Number',
            'total_initial_price' => 'Total Initial Price',
            'total_selling_price' => 'Total Selling Price',
            'total_qty' => 'Total Qty',
            'note' => 'Note',
            'paid' => 'Paid'
        ],
        'placeholder' => [
            'date' => 'Date',
            'payment_method' => 'Payment Method',
            'invoice_number' => 'Invoice Number',
            'total_initial_price' => 'Total Initial Price',
            'total_selling_price' => 'Total Selling Price',
            'total_qty' => 'Total Qty',
            'note' => 'Note',
            'paid' => 'Paid'
        ]
    ],
    'customers' => [
        'title' => 'Title',
        'column' => [
            'name' => 'Name',
            'email' => 'Email',
            'code' => 'Code',
            'total_point' => 'Total Point'
        ],
        'placeholder' => [
            'name' => 'Name',
            'email' => 'Email',
            'code' => 'Code',
            'total_point' => 'Total Point'
        ]
    ],
    'groups' => [
        'title' => 'Group',
        'column' => [
            'name' => 'Name',
            'total_user' => 'Total User'
        ],
        'placeholder' => [
            'name' => 'Name',
        ],
    ],
    'units' => [
        'title' => 'Unit',
        'column' => [
            'name' => 'Name',
        ],
        'placeholder' => [
            'name' => 'Name',
        ],
    ],
    'categories' => [
        'title' => 'Unit',
        'column' => [
            'name' => 'Name',
        ],
        'placeholder' => [
            'name' => 'Name',
        ],
    ],
    'suppliers' => [
        'title' => 'Supplier',
        'column' => [
            'name' => 'Name',
            'shop_name' => 'Shop Name',
            'code' => 'Code',
            'phone' => 'Phone',
            'address' => 'Address'
        ],
        'placeholder' => [
            'name' => 'Name',
            'shop_name' => 'Shop Name',
            'code' => 'Code',
            'phone' => 'Phone',
            'address' => 'Address'
        ],
    ],
    'user' => [
        'title' => 'User',
        'column' => [
            'username' => 'Username',
            'email' => 'Email',
            'role' => 'Role'
        ],
        'placeholder' => [
            'username' => 'Username',
            'email' => 'Email',
            'role' => 'Role'
        ],
        'change_password' => [
            'update' => 'Change Password',
            'column' => [
                'old_password' => 'Old Password',
                'new_password' => 'New Password',
                'new_password_confirmation' => 'New Password Confirmation',
            ],
            'placeholder' => [
                'old_password' => 'Type Your Old Password',
                'new_password' => 'Type Your New Password',
                'new_password_confirmation' => 'Confirm Your New Password'
            ]
        ]
    ],
    'global' => [
        'submit' => 'Submit',
        'action' => 'Action',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'create' => 'Create',
        'created_at' => 'Created At',
        'suredelete' => 'Are You Sure?',
        'error_old_password' => 'Your Old Password is Not Valid'
    ]
];
