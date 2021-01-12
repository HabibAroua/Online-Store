class Category
{   
    constructor(id, name, description)
    {
        this.id = id;
        this.name = name;
        this.description = description;
    }
    
    getId()
    {
        return this.id;
    }
    
    setId(id)
    {
        this.id = id;
    }
    
    getName()
    {
        return this.name;
    }
    
    setName(name)
    {
        this.name = name;
    }
    
    getDescription()
    {
        return this.description;
    }
    
    setDescription(description)
    {
        this.description = description;
    }
}