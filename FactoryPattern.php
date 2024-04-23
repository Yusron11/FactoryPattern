<?php

interface Fabric {
    public function getDescription();
}


class CottonFabric implements Fabric {
    public function getDescription() {
        return "Cotton Fabric";
    }
}

class SilkFabric implements Fabric {
    public function getDescription() {
        return "Silk Fabric";
    }
}

class WoolFabric implements Fabric {
    public function getDescription() {
        return "Wool Fabric";
    }
}


class FabricFactory {
    public function createFabric($type): Fabric {
        switch ($type) {
            case 'cotton':
                return new CottonFabric();
            case 'silk':
                return new SilkFabric();
            case 'wool':
                return new WoolFabric();
            default:
                throw new InvalidArgumentException("Unknown fabric type: $type");
        }
    }
}


$fabricFactory = new FabricFactory();


$cottonFabric = $fabricFactory->createFabric('cotton');
echo "Clothing made of: " . $cottonFabric->getDescription() . "\n";


$silkFabric = $fabricFactory->createFabric('silk');
echo "Clothing made of: " . $silkFabric->getDescription() . "\n";


$woolFabric = $fabricFactory->createFabric('wool');
echo "Clothing made of: " . $woolFabric->getDescription() . "\n";
?>
