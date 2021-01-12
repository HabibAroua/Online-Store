class Product
{
    constructor(reference, label, price, amount, picture, description, idCat)
    {
        this.reference = reference;
        this.label = label;
        this.price = price;
        this.amount = amount;
        this.pricture = picture;
        this.description = description;
        this.idCat = idCat;
    }
    
    getReference()
    {
        return this.reference;
    }
    
    setReference(reference)
    {
        this.reference = reference;
    }
    
    getLabel()
    {
        return this.label;
    }
    
    setLabel(label)
    {
        this.label = label;
    }
    
    getPrice()
    {
        return this.price;
    }
    
    setPrice(price)
    {
        this.price = price;
    }
    
    getAmount()
    {
        return this.amount;
    }
    
    setAmount(amount)
    {
        this.amount = amount;
    }
    
    getPicture()
    {
        return this.picture;
    }
    
    setPicture(picture)
    {
        this.picture = picture;
    }
    
    getDescription()
    {
        return this.description;
    }
    
    setDescription(description)
    {
        this.description = description;
    }
    
    getDdCat()
    {
        return this.idCat;
    }
    
    setIdCat(idCat)
    {
        return this.idCat;
    }
}
