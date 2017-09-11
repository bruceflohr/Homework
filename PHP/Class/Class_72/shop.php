<?php include_once "top.php"; ?>

<div class="container jumbotron text-center">
    <div class="container">
        <form action="index.php?action=add" method="post">
            Bottled Water
            <input type="hidden" name="item" value="bottled water"/>
            <input type="number" min="0" name="quantity" />
            <input type="submit" value="add to cart"/>
        </form>
        <form action="index.php?action=add" method="post">
            Paper
            <input type="hidden" name="item" value="paper"/>
            <input type="number" min="0" name="quantity" />
            <input type="submit" value="add to cart"/>
        </form>
           <a class="btn btn-primary" href="index.php?action=view">View Cart</a>
    </div>
</div>
    
</body>
</html>