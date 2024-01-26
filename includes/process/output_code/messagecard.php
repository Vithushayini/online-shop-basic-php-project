
<section>
    <div class="product-card">
        <!-- <div class="badge">Hot</div> -->
        <div class="product-tumb">
            <img src="<?php echo $Plocation; ?>" >
        </div>
        <div class="product-details">
            <span class="product-catagory">abc pvt</span>
            <h4><?php echo $Pname; ?></h4>
            <p><?php echo $Pdescription; ?></p>
            <div class="product-bottom-details">
                <div class="product-price"><?php echo $Pprice ?></div>
                <!-- <div class="product-links">
                    <a href=""><i class="fa fa-heart"></i></a>
                    <a href=""><i class="fa fa-shopping-cart"></i></a>
                </div> -->
            </div>
        </div>
    </div>
</section>


<style>
   @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

*
{
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    margin: 0;
    padding: 0;
}


body
{
    font-family: 'Lato', sans-serif;
}
a
{
    text-decoration: none;
}
.product-card {
    width: 200px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin-left:200px;
    background: #f5f5f5;
}

/* .badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
} */

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 50px;
    background: #f2dbdb;
}

.product-tumb img {
    /* max-width: 100%;
    max-height: 100%; */
    width:170px;
}

.product-details {
    padding: 20px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ae2356;
    margin-bottom: 18px;
}

.product-details h4{
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #ae2356;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #9a9a9a;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 100%;
}

.product-price {
    font-size: 18px;
    color: #ae2356;
    font-weight: 600;
}

/* Media Breakpoints */
@media only screen and (max-width: 575px) {

    .form {width: 90%;}
    .card-body{
        display: grid;
        width: 100%;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;

    }

    .product-card{
      margin-left:1px;
      width:280px;
    }
    
   
}

@media only screen and (min-width: 575px) and (max-width: 767px){

    .form {width: 500px;}
    
    .card-body{
        display: grid;
        grid-template-columns: 1fr 1fr;
         grid-template-rows: 1fr 1fr;
    }
    .product-tumb {
        
        height: 200px;
        padding: 10px;
        
    }
    .product-catagory {
        font-size: 8px;
        font-weight: 700;
        margin-bottom: 0px;
    }
    .product-card {
        width: 250px;
        height: 280px;
        /* margin: auto auto; */
        margin-bottom: 5px;
        margin-left:2px;
    }
    .product-details{
        padding: 5px;
        width: 70%;
    }
    .product-details h4{
        font-weight: 300;
        margin-bottom: 0px;
        font-size: 10px;
    }
    .product-details p {
        font-size: 10px;
        line-height: 18px;
        margin-bottom: 0px;
        color: #999;
    }
    .product-bottom-details {
        padding-top: 0px;
    }
    .product-price {
        font-size: 10px;
        font-weight: 600;
    }
    #container{width:90%;}
}

@media only screen and (min-width: 768px){

    .form {width: 500px;}
    .card-body{
        
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        /* grid-template-rows:100%; */
        grid-gap: 10px;
        /* text-align: center; */
    }
    
    .product-card {
        width: 175px;
        position: relative;
        box-shadow: 0 2px 7px #dfdfdf;
        margin: 50px auto;
        background: #fafafa;
    }
    #container{width:890px;}

} 

</style>