@extends('layouts.master')
@section('mycontent')
<div class="container my-3">
    <div class="row g-5 justify-content-center">
        <div class="col-md-4">
            <div class="bg-secondary-subtle py-4 rounded">
                <img src="./images/LeftImg.png" alt="LeftImg" width="100%">
            </div>
        </div>
        <div class="col-md-4">
            <div class="row text-center">
                <div class="col-12 bg-secondary-subtle rounded">
                    <img src="./images/Top_grp_Img.png" alt="Top_grp_Img" width="100%">
                </div>
                <div class="col-12 mt-3">
                    <div>
                        <h1>ULTIMATE</h1>
                    </div>
                    <div class="sale-text">SALE</div>
                </div>
                <p>NEW COLLECTIONS</p>
                <a class="btn btn-dark" href="./Shop Page/index.html">SHOP NOW</a>
                <div class="col-12 mt-3">
                    <img src="./images/Bottom_grp_img.png" alt="Bottom_grp_img" width="100%">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-secondary-subtle py-4 RightSideimg rounded">

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <img src="./images/logos.png" alt="Client Logos" width="100%">
    </div>
</div>

<!-- FirstSection -->
<div class="container FirstSection">
    <div class="row">
        <div class="col-md-8 ps-5">
            <div class="text text-start w-75 me-4 my-5">
                <h4>Deals Of The Month</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices
                    sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin </p>
                <button class="btn btn-dark">BUY NOW</button>
            </div>
            <!-- /* From Uiverse.io by 3bdel3ziz-T */ -->
            <div class="black-friday-component mt-3">
                <div class="timer">
                    <div class="item">
                        <div class="days">
                            <div class="day">
                                <span>00</span><span>01</span><span>02</span><span>03</span><span>04</span><span>05</span><span>06</span><span>07</span><span>08</span><span>09</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span>
                            </div>
                        </div>
                        <p>Day</p>
                    </div>
                    <span class="colon">:</span>
                    <div class="item">
                        <div class="hours">
                            <div class="hour">
                                <span>00</span><span>01</span><span>02</span><span>03</span><span>04</span><span>05</span><span>06</span><span>07</span><span>08</span><span>09</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span>
                            </div>
                        </div>
                        <p>Hour</p>
                    </div>
                    <span class="colon">:</span>
                    <div class="item">
                        <div class="minutes">
                            <div class="min">
                                <span>00</span><span>01</span><span>02</span><span>03</span><span>04</span><span>05</span><span>06</span><span>07</span><span>08</span><span>09</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span><span>32</span><span>33</span><span>34</span><span>35</span><span>36</span><span>37</span><span>38</span><span>39</span><span>40</span><span>41</span><span>42</span><span>43</span><span>44</span><span>45</span><span>46</span><span>47</span><span>48</span><span>49</span><span>50</span><span>51</span><span>52</span><span>53</span><span>54</span><span>55</span><span>56</span><span>57</span><span>58</span><span>59</span><span>60</span>
                            </div>
                        </div>
                        <p>Min</p>
                    </div>
                    <span class="colon">:</span>
                    <div class="item">
                        <div class="seconds">
                            <div class="sec">
                                <span>00</span><span>01</span><span>02</span><span>03</span><span>04</span><span>05</span><span>06</span><span>07</span><span>08</span><span>09</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span><span>32</span><span>33</span><span>34</span><span>35</span><span>36</span><span>37</span><span>38</span><span>39</span><span>40</span><span>41</span><span>42</span><span>43</span><span>44</span><span>45</span><span>46</span><span>47</span><span>48</span><span>49</span><span>50</span><span>51</span><span>52</span><span>53</span><span>54</span><span>55</span><span>56</span><span>57</span><span>58</span><span>59</span><span>60</span>
                            </div>
                        </div>
                        <p>Sec</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="height: 500px;">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/Project_image1.png" class="d-block w-100" height="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/Product_image2.png" class="d-block w-100" height="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/Product_image3.png" class="d-block w-100" height="100%" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row pt-5 text-center">
        <div class="col-12">
            <h2>New Arrivals</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices sollicitudin
                <br>
                aliquam sem. Scelerisque duis ultrices sollicitudin
            </p>
        </div>

        <!-- First Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product1.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">Shiny Dress</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <!-- Second Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product2.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">White Shirt</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <!-- Third Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product3.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">Colorful Dress</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <!-- Fourth Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product4.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">White Dress</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <!-- Fifth Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product5.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">Full Sweater</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>

                    </button>
                </div>
            </div>
        </div>

        <!-- Sixth Card  -->
        <div class="col-md-4 mt-5">
            <!-- /* From Uiverse.io by Smit-Prajapati */ -->
            <div class="card">
                <div class="image-container">
                    <img src="./images/Product6.png" alt="" width="100%">

                    <div class="price">$95.50</div>
                </div>
                <div class="content">
                    <div class="brand">Long Dress</div>
                    <div class="product-name">Al Karam</div>
                    <div class="color-size-container">

                    </div>
                    <div class="rating">
                        &starf; &starf; &starf; &starf; &starf;
                        <span class="text-secondary fs-5"> (29,062)</span>
                    </div>
                </div>

                <div class="button-container">
                    <button class="buy-button button">Buy Now</button>
                    <button class="cart-button button">
                        <svg viewBox="0 0 27.97 25.074" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0,1.175A1.173,1.173,0,0,1,1.175,0H3.4A2.743,2.743,0,0,1,5.882,1.567H26.01A1.958,1.958,0,0,1,27.9,4.035l-2.008,7.459a3.532,3.532,0,0,1-3.4,2.61H8.36l.264,1.4a1.18,1.18,0,0,0,1.156.955H23.9a1.175,1.175,0,0,1,0,2.351H9.78a3.522,3.522,0,0,1-3.462-2.865L3.791,2.669A.39.39,0,0,0,3.4,2.351H1.175A1.173,1.173,0,0,1,0,1.175ZM6.269,22.724a2.351,2.351,0,1,1,2.351,2.351A2.351,2.351,0,0,1,6.269,22.724Zm16.455-2.351a2.351,2.351,0,1,1-2.351,2.351A2.351,2.351,0,0,1,22.724,20.373Z"
                                id="cart-shopping-solid"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5 bg">
            <button class="btn btn-dark">View more</button>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mt-5">
    <div class="row mt-5 pt-5">
        <div class="col-md-6 bg-secondary-subtle">
            <img src="./images/peacky_blinders.png" alt="peacky_blinders" width="100%">
        </div>

        <div class="col-md-6 bg-dark-subtle">
            <div class="text p-5">
                <p>Women Collection</p>
                <h1>Peaky Blinders</h1>
                <a href="#" class="text-decoration-none text-dark border-bottom border-dark border-2">DESCRIPTION</a>
                <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque
                    duis ultrices
                    sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Scelerisque duis.</p>

                <p>Size: <span class="bg-dark text-light rounded px-3">M</span></p>
                <h3>$100.00</h3>
                <button class="btn btn-dark px-4">Buy Now</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <img src="./images/features_logos.png" alt="features_logos" width="100%">
</div>


<div class="container-fluid p-0 my-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="text-center">
                <h4>Follow Us On Instagram</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque <br>
                    duis ultrices sollicitudin
                    aliquam sem. Scelerisque duis ultrices sollicitudin </p>
            </div>
        </div>
        <div class="col-md-12 mt-5 p-0">
            <img src="./images/Follow_instagram.png" alt="Follow_instagram" width="100%">
        </div>
    </div>
</div>

<section class="testimonial-slider">
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <h2 class="mb-3">This Is What Our Customers Say</h2>
        <p class="mb-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque
            duis</p>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="rounded-circle p-3" src="./images/Profile_1.png" alt="Profile_2"
                                    width="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text text-warning fs-5">&starf; &starf; &starf; &starf;
                                        &starf;</p>
                                    <h5 class="card-title">James K.</h5>
                                    <p class="text-muted">Traveler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="rounded-circle p-3" src="./images/Profile_2.png" alt="Profile_2"
                                    width="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.
                                    </p>
                                    <p class="card-text text-warning fs-5">&starf; &starf; &starf; &starf;
                                        &starf;</p>
                                    <h5 class="card-title">Suzan B.</h5>
                                    <p class="text-muted">UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="rounded-circle p-3" src="./images/Profile_3.png" alt="Profile_3"
                                    width="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text text-warning fs-5">&starf; &starf; &starf; &starf;
                                        &starf;</p>
                                    <h5 class="card-title">Megen W.</h5>
                                    <p class="text-muted">UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Controls -->
                <button class="carousel-control-prev p-5" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-dark"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
</section>


<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-md-3 mt-5">
            <img src="./images/NewSleter_Img1.png" alt="NewSleter_Img1" width="100%">
        </div>

        <div class="col-md-6 pt-5">
            <div class="card mt-5 border-0 shadow text-center">
                <div class="card-body">
                    <h4 class="card-title">Subscribe To Our Newsletter</h4>
                    <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Scelerisque
                        duis ultrices sollicitudin aliquam sem.</p>
                    <p class="card-text"><small class="text-body-secondary">michael@ymail.com</small></p>
                    <a href="#" class="btn btn-dark px-3">Subscribe Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <img src="./images/Newsleter_Img2.png" alt="Newsleter_Img2" width="100%">
        </div>
    </div>
</div>

<hr>

@endsection
