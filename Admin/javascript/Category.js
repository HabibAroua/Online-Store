class Category
{
    constructor(id , name , description)
    {
        this.id = id;
        this.name = name;
        this.description = description;
    }
    
    insert()
    {
        var x = ("ID : "+this.id+" Name : "+this.name+" Description : "+this.description);
        alert(x);
    }
    
    action()
    {
        $(document).ready
        (
            function()
            {
                $("#hide").click
                (
                    function()
                    {
                        $("p").hide();
                    }
                );
                $("#show").click
                (
                    function()
                    {
                        $("p").show();
                    }
                );
            }
        );
    }
}