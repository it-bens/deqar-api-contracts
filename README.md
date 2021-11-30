# DEQAR API Contracts

![Maintenance Status](https://img.shields.io/badge/Maintained%3F-yes-green.svg)
![CI Status](https://github.com/it-bens/deqar-api-contracts/actions/workflows/ci.yaml/badge.svg?branch=master)

## What are the Contracts of DEQAR?
The DEQAR APIs deliver information about agencies, countries, institutions and reports.
The contracts are interfaces for models that hold the minimal information that is returned by the DEQAR WebApi.

All models are provided as interfaces with a set of value objects returned by getters.
The models also contain connections between each other, which are not always delivered explicitly form DEQAR (but implicitly).
There are no methods described that change the model state. How this should be done, depends on how these models should be used.

Not all data is currently mapped. The models will be extended if more information is required.

## How to use the models?
In order to use the models they have to be extended like this:
```php
use ITB\DeqarApiContracts\Institution as DeqarInstitution;

class Institution implements DeqarInstitution {...}
```

If the data should be persisted, properties like a creation or update timestamp may be added. 
E.g. a `create` method could be used for object construction:
```php
class Institution extends DeqarInstitution 
{
    private DateTimeImmutable $created;
    private DateTimeImmutable $updated;
    
    public static function create(CreateInstitutionCommand $command): self
    {
        $institution = parent::create($command);
        $institution->created = new DateTimeImmutable();
        $institution->updated = clone $institution->created;
        
        return $institution;
    }
    
    public function getCreated(): DateTimeImmutable {...}
    public function getUpdated(): DateTimeImmutable {...}
}
```

## Contributing
I am really happy that the software developer community loves Open Source, like I do! ♥

That's why I appreciate every issue that is opened (preferably constructive)
and every pull request that provides other or even better code to this package.

You are all breathtaking!

## Special Thanks
This project is financed by the European Quality Assurance Register (EQAR) and the European Union, which I am very thankful for!