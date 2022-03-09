<?php include('nav.php') ?>
<html>
<style>
body{
    font-family: "poppins", sans-serif;
    box-sizing : border-box;
    margin:0;
    padding:0;
}
.container{
    width: 100%;
    height: 100vh;
    display: flex;
    background : orange;
    align-content: center;
    align-items : center;
    justify-content: center;
    
}

form {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding:2vw;
    width:90%;
    max-width: 600px;
    max-height: 600px;
    border-radius: 15px;

}
form h3{
    color: orange;
    font-weight: 850;
    font-size: 25px;
    margin-bottom: 10px;  
}
form input, form textarea {
    border : 0;
    font-weight: bold;
    margin: 10px 0;
    padding: 20px;
    outline: none;
    background : #f5f5f5;
    font-size :16px;
}
form button {
    padding: 10px;
    background : #ff5361;
    color : #fff;
    border : 0;
    outline : none;
    cursor : pointer;
    width : 100px;
    margin: 20px auto 0;
    border-radius : 30px;



}
</style>
<body>
    <div class="container">
        <form>
            <h3>GET IN TOUCH </h3>
            <input type="text" id="name" placeholder="Enter Your Name" required>
            <INPUT type= "email" id = "email" placeholder="Enter Your Email id" required>
            <INPUT type= "text" id = "phone " placeholder="Enter Your Phone Number" required>
            <textarea id="message" rows="3" placeholder="How Can We Help You? "></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php include('footer.php') ?>