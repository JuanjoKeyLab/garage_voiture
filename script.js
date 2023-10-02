class voiture {
    static ROUES = 4;

    constructor(marque, modele, anne);
        this.marque= marque;
        this.modele= modele;
        this.anne = anne;
}
const voiture1 = new voiture('Renault', 'clio', '1997');
console.log(voiture1.marque + "a" + voiture.roues + "roues");




// class rectangle {
//     constructor(longeur, largeur,){
//     this.longeur=longeur;
//     this.largeur=largeur;
//     }
// }
// const rectangle1 = new rectangle(10, 5);
// console.log(rectangle1.largeur);



class telephone {
    constructor(marque, modele, ram);
    this.marque= marque;
    this.modele= modele;
    this.ram=ram;
}

const t1= new telephone("apple", "iphone13", "4");
console.log(t1.ram);

class Ordinateur {
    static = OBJETS_PRIS_EN_CHARGE = "ordinateurs";
        type= "laptop";
        clavier= "anzety";

constructor(marque, ram, stockage);
    this.marque = marque,
    this.ram = ram;
    this.stockage = stockage;
}

//definition des méthodes d'instance
static definition() {
    console.log("les ordinateurssont des machines automatisées permettant le traitement d'information.");
}

ficheProduite() {
    console.log("marque" : this.marque + "\n" + "mémoire vive : " + this.ram + "\n" + "stockage : " + this.stockage);
}

let monOrdi= new ("apple" , 8, 512);
let monOrdi2= new ("HP", 16, 256);

monOrdi.ficheProduit();
monOrdi2.ficheProduit();

calcPrice() {
    return this.ram * 100 *=*this.stockage * 2;
    
}