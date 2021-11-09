# DEQAR API Contracts

## What are the Contracts of DEQAR?
The DEQAR APIs deliver information about agencies, countries, institutions and reports.
The contracts are models that hold the minimal information that is returned by the DEQAR WebApi.

All models are abstract classes with protected properties and a set of value objects 
that represent the constraints of these properties. The models also contain connections between each other,
which are not always delivered explicitly form DEQAR (but implicitly). The models contain an empty private constructor
and a static `create` method, that handles the object creation and applies the necessary constrains. 
The `create method` takes a dto/command as an argument, that is provided as an abstract class, too.
There are no methods implemented that change the model state. How this should be done depends on how these models should be used.

Not all data is currently mapped. The models will be extended if more information is required.

## How to use the models?
In order to use the models they have to be extended like this:
```php
use ITB\DeqarApiContracts\Model\Institution as DeqarInstitution;

class Institution extends DeqarInstitution {...}
```

If the data should be persisted, properties like a creation or update timestamp may be added. 
The `create` method should be extended as well and the getters should be added:
```php
use ITB\DeqarApiContracts\Command\CreateInstitutionCommand;

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

If new properties should be added to a model or a type should be overwritten, 
the create command dto, has to be extended as well:
```php
use ITB\DeqarApiContracts\Command\CreateInstitutionCommand as DeqarCreateInstitutionCommand

class CreateInstitutionCommand extends DeqarCreateInstitutionCommand
{
    public function __construct(
        int $id,
        string $deqarId,
        string $namePrimary,
        string $nameSelectDisplay,
        string $nameOfficialDisplay,
        /** The eTag property is new */
        public string $eTag,
        ?string $eterId = null,
        ?string $website = null,
        ?string $country = null,
        array $qfEheaLevels = [],
    ) {
        parent::__construct(
            $id,
            $deqarId,
            $namePrimary,
            $nameSelectDisplay,
            $nameOfficialDisplay,
            $eterId,
            $website,
            $country,
            $qfEheaLevels
        )
    }
}
```
> ⚠ If a class with constructor promotion is extended in PHP, the child class cannot promote the same properties again.
> That's why they have to be handled like shown. However, the new properties don't have to be defined by promotion.

The model properties can also be overwritten, to allow relations like in Doctrine:
```php
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class Country extends DeqarCountry 
{
    // Before: private array $institutions;
    private Collection $institutions;
    
    public static function create(CreateCountryCommand $command): self
    {
        $country = new static();

        $country->id = (new Id($command->id))->get();
        $country->countryCode = (new CountryCode($command->countryCode))->get();
        $country->externalQaaIsPermitted = (new PermissionStatus($command->externalQaaIsPermitted))->get();
        $country->europeanApproachIsPermitted = (new PermissionStatus($command->europeanApproachIsPermitted))->get();
        $country->hasFullInstitutionList = $command->hasFullInstitutionList;
        $country->eheaKeyCommitment = (new CommitmentStatus($command->eheaKeyCommitment))->get();
        $country->eqarGovernmentalMemberStart = $command->eqarGovernmentalMemberStart;
        $country->agencyCount = (new AgencyCount($command->agencyCount))->get();
        $country->institutions = new ArrayCollection();

        return $country;
    }
    
    public function getInstitutions(): Institution {...}
}
```
Unfortunately, this requires the static constructor to be overwritten. I am open for suggestions how to improve this!

## Contributing
I am really happy that the software developer community loves Open Source, like I do! ♥

That's why I appreciate every issue that is opened (preferably constructive)
and every pull request that provides other or even better code to this package.

You are all breathtaking!

## Special Thanks
This project is financed by the European Quality Assurance Register (EQAR) and the European Union, which I am very thankful for!