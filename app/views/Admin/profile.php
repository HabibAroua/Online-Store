<script src="/Online-Store/Admin/javascript/login.js"></script>
<script>
    if(getId() === null)
    {
        location.href = "?page=login";   
    }
    else
    {
        console.log("You connected us "+getId());
    }
</script>
<h1>My profile</h1>