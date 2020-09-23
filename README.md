# Star Wars Planets

Get a random Star Wars planet for your PHP project.

## Installation

Require the package using composer:

```bash
composer require chriischambers/star-wars-planets
```

## Usage

```php
use ChriisChambers\StarWarsPlanets\PlanetFactory;

$planets = new PlanetFactory();

$planet = $planets->getRandomPlanet();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
