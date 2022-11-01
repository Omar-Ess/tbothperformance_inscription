<?php

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

return [
    'accepted'             => 'Le champ :attribute doit être accepté.',
    'accepted_if'          => 'Le champ :attribute doit être accepté quand :other a la valeur :value.',
    'active_url'           => 'Le champ :attribute n\'est pas une URL valide.',
    'after'                => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal'       => 'Le champ :attribute doit être une date postérieure ou égale au :date.',
    'alpha'                => 'Le champ :attribute doit contenir uniquement des lettres.',
    'alpha_dash'           => 'Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
    'array'                => 'Le champ :attribute doit être un tableau.',
    'attached'             => ':attribute est déjà attaché(e).',
    'before'               => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal'      => 'Le champ :attribute doit être une date antérieure ou égale au :date.',
    'between'              => [
        'array'   => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
        'file'    => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'string'  => 'Le texte :attribute doit contenir entre :min et :max caractères.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le champ de confirmation :attribute ne correspond pas.',
    'current_password'     => 'Le mot de passe est incorrect.',
    'date'                 => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals'          => 'Le champ :attribute doit être une date égale à :date.',
    'date_format'          => 'Le champ :attribute ne correspond pas au format :format.',
    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between'       => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions'           => 'La taille de l\'image :attribute n\'est pas conforme.',
    'distinct'             => 'Le champ :attribute a une valeur en double.',
    'email'                => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with'            => 'Le champ :attribute doit se terminer par une des valeurs suivantes : :values',
    'exists'               => 'Le champ :attribute sélectionné est invalide.',
    'file'                 => 'Le champ :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute doit avoir une valeur.',
    'gt'                   => [
        'array'   => 'Le tableau :attribute doit contenir plus de :value éléments.',
        'file'    => 'La taille du fichier de :attribute doit être supérieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure à :value.',
        'string'  => 'Le texte :attribute doit contenir plus de :value caractères.',
    ],
    'gte'                  => [
        'array'   => 'Le tableau :attribute doit contenir au moins :value éléments.',
        'file'    => 'La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
        'string'  => 'Le texte :attribute doit contenir au moins :value caractères.',
    ],
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ :attribute est invalide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => 'Le champ :attribute doit être un entier.',
    'ip'                   => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4'                 => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json'                 => 'Le champ :attribute doit être un document JSON valide.',
    'lt'                   => [
        'array'   => 'Le tableau :attribute doit contenir moins de :value éléments.',
        'file'    => 'La taille du fichier de :attribute doit être inférieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure à :value.',
        'string'  => 'Le texte :attribute doit contenir moins de :value caractères.',
    ],
    'lte'                  => [
        'array'   => 'Le tableau :attribute doit contenir au plus :value éléments.',
        'file'    => 'La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
        'string'  => 'Le texte :attribute doit contenir au plus :value caractères.',
    ],
    'max'                  => [
        'array'   => 'Le tableau :attribute ne peut contenir plus de :max éléments.',
        'file'    => 'La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.',
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'string'  => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
    ],
    'mimes'                => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes'            => 'Le champ :attribute doit être un fichier de type : :values.',
    'min'                  => [
        'array'   => 'Le tableau :attribute doit contenir au moins :min éléments.',
        'file'    => 'La taille du fichier de :attribute doit être supérieure à :min kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :min.',
        'string'  => 'Le texte :attribute doit contenir au moins :min caractères.',
    ],
    'multiple_of'          => 'La valeur de :attribute doit être un multiple de :value',
    'not_in'               => 'Le champ :attribute sélectionné n\'est pas valide.',
    'not_regex'            => 'Le format du champ :attribute n\'est pas valide.',
    'numeric'              => 'Le champ :attribute doit contenir un nombre.',
    'password'             => 'Le mot de passe est incorrect',
    'present'              => 'Le champ :attribute doit être présent.',
    'prohibited'           => 'Le champ :attribute est interdit.',
    'prohibited_if'        => 'Le champ :attribute est interdit quand :other a la valeur :value.',
    'prohibited_unless'    => 'Le champ :attribute est interdit à moins que :other est l\'une des valeurs :values.',
    'prohibits'            => 'Le champ :attribute interdit :other d\'être présent.',
    'regex'                => 'Le format du champ :attribute est invalide.',
    'relatable'            => ':attribute n\'est sans doute pas associé(e) avec cette donnée.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values sont présents.',
    'required_without'     => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis quand aucun de :values n\'est présent.',
    'same'                 => 'Les champs :attribute et :other doivent être identiques.',
    'size'                 => [
        'array'   => 'Le tableau :attribute doit contenir :size éléments.',
        'file'    => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être :size.',
        'string'  => 'Le texte de :attribute doit contenir :size caractères.',
    ],
    'starts_with'          => 'Le champ :attribute doit commencer avec une des valeurs suivantes : :values',
    'string'               => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone'             => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique'               => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded'             => 'Le fichier du champ :attribute n\'a pu être téléversé.',
    'url'                  => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'uuid'                 => 'Le champ :attribute doit être un UUID valide',
    "date_between" => "Le champ :attribute doit être compris entre :start et :end",

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
        'city_id' => [
            'required_if' => "Le champ ville est obligatoire.",
        ],
        'ids' => [
            'required' => "Les éléments sélectionnés sont obligatoires.",
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

    'attributes' => [
        'address'               => 'adresse',
        'age'                   => 'âge',
        'available'             => 'disponible',
        'city'                  => 'ville',
        'city_id'                  => 'ville',
        'content'               => 'contenu',
        'country'               => 'pays',
        'current_password'      => 'mot de passe actuel',
        'date'                  => 'date',
        'day'                   => 'jour',
        'description'           => 'description',
        'email'                 => 'adresse e-mail',
        'excerpt'               => 'extrait',
        'first_name'            => 'prénom',
        'gender'                => 'genre',
        'hour'                  => 'heure',
        'last_name'             => 'nom',
        'minute'                => 'minute',
        'mobile'                => 'portable',
        'month'                 => 'mois',
        'name'                  => 'nom',
        'password'              => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'phone'                 => 'téléphone',
        'second'                => 'seconde',
        'sex'                   => 'sexe',
        'size'                  => 'taille',
        'time'                  => 'heure',
        'title'                 => 'titre',
        'username'              => 'nom d\'utilisateur',
        'year'                  => 'année',
        'created_at' => "créé à",
        'updated_at' => 'mis à jour à',
        "selectedRolesNames" => "rôles",
        "code" => "code",
        "full_name" => "Nom complet",
        "ice" => "ice",
        "observation" =>  "observation",
        "reference" => "référence",
        "debut_date"  =>  "date de début",
        "deposit_date"  =>  "date de dépôt",
        "year"  =>  "année",
        "number"  =>  "numéro",
        "etiquette"  =>  "étiquette",
        "date" => "date",
        "result" => "résultat",
        "type_id" => "type",
        "website" => "site internet",
        "complete" => "complété",
        "instructions" => "instruction",
        "urgent" => "urgent",
        "classification" => "classification",
        "classifications" => "classifications",
        "type" => "type",
        "type_id" => "type",
        "designation" => "désignation",
        "price" => "prix",
        "notes" => "notes",
        "customer_id" => "client",
        "subtotal" => "sous total",
        "total" => "total",
        "tax_rate" => "TVA",
        "discount_value" => "valeur de remise",
        "discount_type" => "type de remise",
        "certificate" => "certificat",
        "eligible_for_cpf" => "éligible au CPF",
        "category_id" => "catégorie",
        "category" => "catégorie",
        "cpf_link" => "lien CPF",
        "features" => "traits",
        "plans.*.pivot.cpf_link" => "lien CPF",
        "plans" => "formules",
        "plan" => "formule"
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Values
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to translate validation values such as required_if:field,value
    |
    */

    'values' => [
        'type' => [
            'physical' => 'physique',
            "moral" => "moral"
        ],
        "classification" => [
            "preliminary" => "avant dire droit",
            "definitive" => "définitif"
        ],
        "jurisdiction" => [
            "type" => [
                "code" => [
                    "CC" => "cour de cassation"
                ]
            ]
        ],
        "delay_start_date" => [
            "judgement date" => "date du jugement",
            "judgement copy reception date" => "date de réception de copie du jugement",
            "judgement notification date" => "date de notification du judgement",
        ],
    ],
];
