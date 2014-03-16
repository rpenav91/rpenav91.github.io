//----------------------------------------------------------------
// store (contains the products)
//
// NOTE: nutritional info from http://www.cspinet.org/images/fruitcha.jpg
// score legend:
// 0: below 5% of daily value (DV)
// 1: 5-10% DV
// 2: 10-20% DV
// 3: 20-40% DV
// 4: above 40% DV
//
//new product(imagen,nombre,leyenda,precio,calorias,carotenoid,fiber,folates,potassium,vitaminc)
function store() {
    this.extras = [
        new product("APL", "Manzanas", "Si desea comer saludable y estar saciado, las manzanas son la mejor elección.", 15),        
        new product("BAN", "Bananos", "Comer babanos reduce el riesgo de padecer de presión alta.", 4),
        new product("GRF", "Toronjas", "Pink or red, always healthy and delicious.", 11),
        new product("GRP", "Uvas", "Wine is great, but grapes are even better.", 8),
    ];

    this.frutas = [
        new product("APL", "Manzanas", "Si desea comer saludable y estar saciado, las manzanas son la mejor elección.", 15),        
        new product("BAN", "Bananos", "Comer babanos reduce el riesgo de padecer de presión alta.", 4),
    ];
    this.bebidas = [
        new product("COC", "Coca Cola", "Coca Cola en botella. Tamaño: 1/2 litro", 18),        
        new product("SPR", "Sprite", "Sprite en botella. Tamaño: 1/2 litro.", 18),
    ];
    this.carnes = [
        new product("FIL", "Filete", "Filete de pescado bañado en salsa tártara.", 35),
    ];
    this.postres = [
        new product("pil", "Pie de Limón", "El postre favorito de nuestra casa.", 45),
    ];
    this.extras = [
        new product("ARR", "Arroz Chino", "Si desea comer saludable y estar saciado, las manzanas son la mejor elección.", 35),        
        new product("fri", "Frijoles Fritos", "Comer babanos reduce el riesgo de padecer de presión alta.", 35),
    ];    

}
store.prototype.getProduct = function (sku) {
    for (var i = 0; i < this.extras.length; i++) {
        if (this.extras[i].sku == sku)
            return this.extras[i];
    }
    for (var i = 0; i < this.bebidas.length; i++) {
        if (this.bebidas[i].sku == sku)
            return this.bebidas[i];
    }
    for (var i = 0; i < this.carnes.length; i++) {
        if (this.carnes[i].sku == sku)
            return this.carnes[i];
    }
    for (var i = 0; i < this.postres.length; i++) {
        if (this.postres[i].sku == sku)
            return this.postres[i];
    }
    for (var i = 0; i < this.frutas.length; i++) {
        if (this.frutas[i].sku == sku)
            return this.frutas[i];
    }                
    return null;
}



