<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => '그만큼 :attribute 받아 들여야합니다.',
    'accepted_if' => '그만큼 :attribute :other가 :value일 때 허용되어야 합니다.',
    'active_url' => '그만큼 :attribute 유효한 URL이 아닙니다.',
    'after' => '그만큼 :attribute :date 이후의 날짜여야 합니다.',
    'after_or_equal' => '그만큼 :attribute :date 이후의 날짜이거나 같아야 합니다.',
    'alpha' => '그만큼 :attribute 문자만 포함해야 합니다.',
    'alpha_dash' => '그만큼 :attribute 문자, 숫자, 대시 및 밑줄만 포함해야 합니다.',
    'alpha_num' => '그만큼 :attribute 문자와 숫자만 포함해야 합니다.',
    'array' => '그만큼 :attribute 배열이어야 합니다.',
    'before' => '그만큼 :attribute :date 이전의 날짜여야 합니다.',
    'before_or_equal' => '그만큼 :attribute :date 이전의 날짜이거나 같아야 합니다.',
    'between' => [
        'array' => '그만큼 :attribute :min과 :max 사이의 항목이 있어야 합니다.',
        'file' => '그만큼 :attribute :min과 :max 킬로바이트 사이여야 합니다.',
        'numeric' => '그만큼 :attribute :min과 :max 사이에 있어야 합니다.',
        'string' => '그만큼 :attribute :min과 :max 사이에 있어야 합니다.',
    ],
    'boolean' => '그만큼 :attribute 필드는 true 또는 false여야 합니다.',
    'confirmed' => '그만큼 :attribute 확인이 일치하지 않습니다.',
    'current_password' => '비밀번호가 잘못되었습니다.',
    'date' => '그만큼 :attribute 유효한 날짜가 아닙니다.',
    'date_equals' => '그만큼 :attribute :date와 같은 날짜여야 합니다.',
    'date_format' => '그만큼 :attribute 형식:형식과 일치하지 않습니다.',
    'declined' => '그만큼 :attribute 거절해야 합니다.',
    'declined_if' => '그만큼 :attribute :other가 :value일 때 거부해야 합니다.',
    'different' => '그만큼 :attribute 및 :other는 달라야 합니다.',
    'digits' => '그만큼 :attribute :digits 숫자여야 합니다.',
    'digits_between' => '그만큼 :attribute :min과 :max 사이에 있어야 합니다.',
    'dimensions' => '그만큼 :attribute 이미지 크기가 잘못되었습니다.',
    'distinct' => '그만큼 :attribute 필드에 중복 값이 ​​있습니다.',
    'doesnt_end_with' => '그만큼 :attribute :values ​​중 하나로 끝나지 않을 수 있습니다.',
    'doesnt_start_with' => '그만큼 :attribute :values ​​중 하나로 시작할 수 없습니다.',
    'email' => '그만큼 :attribute 유효한 이메일 주소이어야합니다.',
    'ends_with' => '그만큼 :attribute :values ​​중 하나로 끝나야 합니다.',
    'enum' => '선택한 :attribute 유효하지 않다.',
    'exists' => '선택한 :attribute 유효하지 않다.',
    'file' => '그만큼 :attribute 파일이어야 합니다.',
    'filled' => '그만큼 :attribute 필드에는 값이 있어야 합니다.',
    'gt' => [
        'array' => '그만큼 :attribute :value 이상의 항목이 있어야 합니다.',
        'file' => '그만큼 :attribute :value 킬로바이트보다 커야 합니다.',
        'numeric' => '그만큼 :attribute :value보다 커야 합니다.',
        'string' => '그만큼 :attribute :value 문자보다 커야 합니다.',
    ],
    'gte' => [
        'array' => '그만큼 :attribute :value 항목 이상이 있어야 합니다.',
        'file' => '그만큼 :attribute :value 킬로바이트보다 크거나 같아야 합니다.',
        'numeric' => '그만큼 :attribute :value보다 크거나 같아야 합니다.',
        'string' => '그만큼 :attribute :value 문자보다 크거나 같아야 합니다.',
    ],
    'image' => '그만큼 :attribute 이미지여야 합니다.',
    'in' => '선택한 :attribute 유효하지 않다.',
    'in_array' => '그만큼 :attribute 필드가 :other에 존재하지 않습니다.',
    'integer' => 'The :attribute 정수여야 합니다.',
    'ip' => '그만큼 :attribute 유효한 IP 주소여야 합니다.',
    'ipv4' => '그만큼 :attribute 유효한 IPv4 주소여야 합니다.',
    'ipv6' => '그만큼 :attribute 유효한 IPv6 주소여야 합니다.',
    'json' => '그만큼 :attribute 유효한 JSON 문자열이어야 합니다.',
    'lt' => [
        'array' => '그만큼 :attribute :value 항목보다 작아야 합니다.',
        'file' => '그만큼 :attribute :value 킬로바이트보다 작아야 합니다.',
        'numeric' => '그만큼 :attribute :value보다 작아야 합니다.',
        'string' => '그만큼 :attribute :value 문자보다 작아야 합니다.',
    ],
    'lte' => [
        'array' => '그만큼 :attribute :value 항목을 초과해서는 안 됩니다.',
        'file' => '그만큼 :attribute :value 킬로바이트보다 작거나 같아야 합니다.',
        'numeric' => '그만큼 :attribute :value보다 작거나 같아야 합니다.',
        'string' => '그만큼 :attribute :value 문자보다 작거나 같아야 합니다.',
    ],
    'mac_address' => '그만큼 :attribute must be a valid MAC address.',
    'max' => [
        'array' => '그만큼 :attribute must not have more than :max items.',
        'file' => '그만큼 :attribute must not be greater than :max kilobytes.',
        'numeric' => '그만큼 :attribute must not be greater than :max.',
        'string' => '그만큼 :attribute must not be greater than :max characters.',
    ],
    'max_digits' => '그만큼 :attribute must not have more than :max digits.',
    'mimes' => '그만큼 :attribute must be a file of type: :values.',
    'mimetypes' => '그만큼 :attribute must be a file of type: :values.',
    'min' => [
        'array' => '그만큼 :attribute must have at least :min items.',
        'file' => '그만큼 :attribute must be at least :min kilobytes.',
        'numeric' => '그만큼 :attribute must be at least :min.',
        'string' => '그만큼 :attribute must be at least :min characters.',
    ],
    'min_digits' => '그만큼 :attribute must have at least :min digits.',
    'multiple_of' => '그만큼 :attribute must be a multiple of :value.',
    'not_in' => '선택한 :attribute is invalid.',
    'not_regex' => '그만큼 :attribute format is invalid.',
    'numeric' => '그만큼 :attribute must be a number.',
    'password' => [
        'letters' => '그만큼 :attribute must contain at least one letter.',
        'mixed' => '그만큼 :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => '그만큼 :attribute must contain at least one number.',
        'symbols' => '그만큼 :attribute must contain at least one symbol.',
        'uncompromised' => '주어진 :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => '그만큼 :attribute field must be present.',
    'prohibited' => '그만큼 :attribute field is prohibited.',
    'prohibited_if' => '그만큼 :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => '그만큼 :attribute field is prohibited unless :other is in :values.',
    'prohibits' => '그만큼 :attribute field prohibits :other from being present.',
    'regex' => '그만큼 :attribute format is invalid.',
    'required' => '그만큼 :attribute field is required.',
    'required_array_keys' => '그만큼 :attribute field must contain entries for: :values.',
    'required_if' => '그만큼 :attribute field is required when :other is :value.',
    'required_if_accepted' => '그만큼 :attribute field is required when :other is accepted.',
    'required_unless' => '그만큼 :attribute field is required unless :other is in :values.',
    'required_with' => '그만큼 :attribute field is required when :values is present.',
    'required_with_all' => '그만큼 :attribute field is required when :values are present.',
    'required_without' => '그만큼 :attribute field is required when :values is not present.',
    'required_without_all' => '그만큼 :attribute field is required when none of :values are present.',
    'same' => '그만큼 :attribute and :other must match.',
    'size' => [
        'array' => '그만큼 :attribute must contain :size items.',
        'file' => '그만큼 :attribute must be :size kilobytes.',
        'numeric' => '그만큼 :attribute must be :size.',
        'string' => '그만큼 :attribute must be :size characters.',
    ],
    'starts_with' => '그만큼 :attribute must start with one of the following: :values.',
    'string' => '그만큼 :attribute must be a string.',
    'timezone' => '그만큼 :attribute must be a valid timezone.',
    'unique' => '그만큼 :attribute has already been taken.',
    'uploaded' => '그만큼 :attribute failed to upload.',
    'url' => '그만큼 :attribute must be a valid URL.',
    'uuid' => '그만큼 :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
