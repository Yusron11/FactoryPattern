<?php

// Interface untuk produk-produk yang akan dibuat
interface Shirt {
    public function getSize();
}

interface Trouser {
    public function getWaist();
}

// Kelas konkret yang mengimplementasikan Shirt
class CasualShirt implements Shirt {
    public function getSize() {
        return "M";
    }
}

class FormalShirt implements Shirt {
    public function getSize() {
        return "L";
    }
}

// Kelas konkret yang mengimplementasikan Trouser
class CasualTrouser implements Trouser {
    public function getWaist() {
        return 32;
    }
}

class FormalTrouser implements Trouser {
    public function getWaist() {
        return 36;
    }
}

// Interface untuk Abstract Factory
interface ClothesFactory {
    public function createShirt(): Shirt;
    public function createTrouser(): Trouser;
}

// Concrete Factory yang mengimplementasikan Abstract Factory
class CasualClothesFactory implements ClothesFactory {
    public function createShirt(): Shirt {
        return new CasualShirt();
    }

    public function createTrouser(): Trouser {
        return new CasualTrouser();
    }
}

class FormalClothesFactory implements ClothesFactory {
    public function createShirt(): Shirt {
        return new FormalShirt();
    }

    public function createTrouser(): Trouser {
        return new FormalTrouser();
    }
}

// Client code
function dressUp(ClothesFactory $factory) {
    $shirt = $factory->createShirt();
    $trouser = $factory->createTrouser();
    
    echo "Shirt size: " . $shirt->getSize() . "\n";
    echo "Trouser waist: " . $trouser->getWaist() . "\n";
}

// Penggunaan
echo "Casual wear:\n";
dressUp(new CasualClothesFactory());

echo "\nFormal wear:\n";
dressUp(new FormalClothesFactory());
?>
