<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


        <title>online price - Ali Morshedi</title>
    </head>

    <body>

        <!-- ( USD | EUR ) Modal -->
        <div class="modal fade" id="USDEURModal" tabindex="-1" aria-labelledby="USDEURModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Currency</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body-USDEUR">
                        <div class="mb-USDEUR">
                            <p>Popular currencies</p>
                            <div class="popular-currencies-USDEUR">

                                <div class="pc-USDEUR select-USDEUR active-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/USD.svg);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>United States Dollar</span>
                                        <span>USD - $</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="20px" width="20px" viewBox="0 0 24 24" class="sc-1pyr0bh-0 gWWmph" style="color: rgb(22, 199, 132);"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM16.7557 9.65493C17.1174 9.23758 17.0723 8.60602 16.6549 8.24431C16.2376 7.8826 15.606 7.92771 15.2443 8.34507L10.8 13.4731L8.75569 11.1143C8.39398 10.6969 7.76242 10.6518 7.34507 11.0135C6.92771 11.3752 6.8826 12.0068 7.24431 12.4242L10.0443 15.6549C10.2343 15.8741 10.51 16 10.8 16C11.09 16 11.3657 15.8741 11.5557 15.6549L16.7557 9.65493Z"></path><svg></svg></svg>
                                    </div>
                                </div>

                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/EUR.svg);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>EUR</span>
                                        <span>EUR - €</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                    </div>
                                </div>
                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/GBP.svg);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>Pound Sterling</span>
                                        <span>GBP - £</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                    </div>
                                </div>
                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/img/coins/64x64/1.png);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>Bitcoin</span>
                                        <span>BTC</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                    </div>
                                </div>
                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/img/coins/64x64/1027.png);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>Ethereum</span>
                                        <span>ETH</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="mb-USDEUR">
                            <p>Bitcoin Units</p>
                            <div class="popular-currencies-USDEUR">

                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/img/coins/64x64/1.png);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>Bitcoin</span>
                                        <span>BTC</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="20px" width="20px" viewBox="0 0 24 24" class="sc-1pyr0bh-0 gWWmph" style="color: rgb(22, 199, 132);"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM16.7557 9.65493C17.1174 9.23758 17.0723 8.60602 16.6549 8.24431C16.2376 7.8826 15.606 7.92771 15.2443 8.34507L10.8 13.4731L8.75569 11.1143C8.39398 10.6969 7.76242 10.6518 7.34507 11.0135C6.92771 11.3752 6.8826 12.0068 7.24431 12.4242L10.0443 15.6549C10.2343 15.8741 10.51 16 10.8 16C11.09 16 11.3657 15.8741 11.5557 15.6549L16.7557 9.65493Z"></path><svg></svg></svg>
                                    </div>
                                </div>
                                <div class="pc-USDEUR select-USDEUR">
                                    <div class="S-USDEUR-icon" style="background-image: url(https://s2.coinmarketcap.com/static/img/coins/64x64/1.png);"></div>
                                    <div class="S-USDEUR-title">
                                        <span>Satoshi</span>
                                        <span>SATS</span>
                                    </div>
                                    <div class="S-USDEUR-selected">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============== Modals ============== -->

        <header>
            <div class="header-box">
                <div class="header-1">
                    <span>Market gap : <span class="header-span-2">$1,058,897,351,125.064</span></span>
                    <span>24h Vol:  <span class="header-span-2">$91,315,290,948.88</span></span>
                    <span>Dominance:  <span class="header-span-2">BTC: 42.6% ETH: 17.8%</span></span>
                    <span>ETH Gas:  <span class="header-span-2">59 Gwei</span></span>
                    <span class="cursor-pointer" id="lang-select">English <i class="fa-solid fa-sort-down"></i></span>
                    <span class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#USDEURModal">USD <i class="fa-solid fa-sort-down"></i></span>
                    <span class="cursor-pointer"><i id="dark-mode" class="fa-solid fa-sun" style="font-size: 25px;"></i></span>
                    <span>
                        <button class="btn btn-outline-dark">log In</button>
                        <button class="btn btn-outline-dark">sign up</button>
                    </span>
                    <div class="select-box">
                        <div class="options-container active">
                            <div class="option">
                                <input
                                        type="radio"
                                        class="radio"
                                        id="automobiles"
                                        name="category"
                                />
                                <label for="automobiles">Automobiles</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="film">Film & Animation</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="science" name="category" />
                                <label for="science">Science & Technology</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="art" name="category" />
                                <label for="art">Art</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="music" name="category" />
                                <label for="music">Music</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="travel" name="category" />
                                <label for="travel">Travel & Events</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="sports" name="category" />
                                <label for="sports">Sports</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="news" name="category" />
                                <label for="news">News & Politics</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="tutorials" name="category" />
                                <label for="tutorials">Tutorials</label>
                            </div>
                        </div>

                        <div class="selected">
                            Select website language
                            <div id="lang-search-close-btn" class="">
                                <img src="img/close.png" alt="">
                            </div>
                        </div>

                        <div class="search-box">
                            <input type="text" placeholder="Start Typing..." />
                        </div>
                    </div>
                </div>

                <div class="header-2">
                    <div class="d-flex flex-direction-row align-item-center">

                        <i class="fa-brands fa-adn" style="font-size: 30px;"></i>
                        <h5 class="d-inline cursor-pointer" style="margin: 0 5px">Ali Crypto</h5>
                    </div>

                    <div class="navbar">
                        <div class="menu">
                            <span>Cryptocurrencies</span>
                            <div class="sub-menu">
                                <a href=""><i class="fa-solid fa-chart-pie"></i> Overall NFT Stats</a>
                                <a href=""><i class="fa-solid fa-image"></i> Top Collections</a>
                                <a href=""><i class="fa-solid fa-bars"></i> Categories</a>
                            </div>
                        </div>
                        <div class="menu">
                            <span>Exchanges</span>
                            <div class="sub-menu">
                                <a href=""><i class="fa-brands fa-spotify"></i> spot</a>
                                <a href=""><i class="fa-brands fa-app-store"></i> DEX</a>
                                <a href=""><i class="fa-brands fa-artstation"></i> Derivatives</a>
                            </div>
                        </div>
                        <div class="menu">
                            <span>community</span>
                            <div class="sub-menu">
                                <a href=""><i class="fa-solid fa-rss"></i> feeds</a>
                                <a href=""><i class="fa-solid fa-newspaper"></i> articles</a>
                            </div>
                        </div>
                        <div class="menu">
                            <span>Products</span>
                            <div class="sub-menu">
                                <a href=""><i class="fa-solid fa-money-bill-transfer"></i> converter</a>
                                <a href=""><i class="fa-brands fa-android"></i> mobile Apps</a>
                                <a href=""><i class="fa-solid fa-person-circle-plus"></i> job Board</a>
                                <a href=""><i class="fa-solid fa-calendar-days"></i> ICO calendar</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex" >
                        <div class="search-box-link-btn">
                            <span class="cursor-pointer"><i class="fa-solid fa-star"></i> watchlist</span>
                            <span class="cursor-pointer"><i class="fa-solid fa-chart-pie"></i> portfolio</span>
                        </div>
                        <div class="search" style="">

                            <span>
                                <i class="fa-solid fa-magnifying-glass" style="color: #cacaca"></i> <span style="color: #898989">search</span>
                            </span>
                            <span><i class="fa-solid fa-slash" style="background:rgb(166, 176, 195);padding: 7px;color: #dadada;border-radius: 7px;font-size: 13px;"></i></span>

                            <div id="search-crypto-id" class="search-crypto">
                                <div class="sc-input">
                                    <div class="">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <input type="text" placeholder="what are you looking for? ">
                                    <span id="close-search-crypto">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </span>
                                </div>
                                <div class="sc-title">
                                    <span><span style="font-size: 12px;">Trending</span> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16px" width="16px" viewBox="0 0 24 24" color="#FF775F" class="sc-1pyr0bh-0 cflTgc"><path d="M17.0881 9.42254C16.4368 8.90717 15.8155 8.35512 15.3012 7.71336C12.3755 4.06357 13.8912 1 13.8912 1C8.46026 3.18334 7.22337 6.64895 7.16462 9.22981L7.1675 9.2572C7.1675 9.2572 7.21498 10.7365 7.90791 12.3625C8.12481 12.8713 7.88299 13.4666 7.33195 13.6199C6.87638 13.7465 6.40822 13.5317 6.21571 13.1314C5.90413 12.4831 5.49262 11.4521 5.6109 10.7249C4.75064 11.817 4.1815 13.1452 4.03542 14.6184C3.65092 18.4924 6.43759 22.0879 10.4208 22.8488C14.9906 23.7217 19.3121 20.7182 19.9269 16.3623C20.3117 13.6367 19.1498 11.0538 17.0881 9.42254ZM14.3578 17.7393C14.3289 17.776 13.5893 18.6597 12.3501 18.7517C12.2829 18.7547 12.2124 18.7577 12.1452 18.7577C11.2902 18.7577 10.4226 18.3682 9.56103 17.5951L9.37219 17.4262L9.61243 17.3372C9.62843 17.3312 11.2742 16.7236 11.6778 15.4077C11.8155 14.9629 11.7707 14.4566 11.553 13.9842C11.2905 13.4075 10.7845 11.9564 11.7453 10.9041L11.9309 10.7015L12.0206 10.9561C12.0238 10.9714 12.6034 12.5911 13.9741 13.4379C14.3871 13.6957 14.6977 14.0086 14.8931 14.3644C15.2959 15.1132 15.533 16.3065 14.3578 17.7393Z"></path><svg></svg></svg></span>
                                </div>
                                <div class="sc-body">
                                    <a class="scb-crypto">
                                        <div class="scb-crypto-info">
                                            <div class="scbi-icon">
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/7186.png" name="PancakeSwap" alt="PancakeSwap" class="atjc29-3 jqPrlG">
                                            </div>
                                            <div class="scbi-name">
                                                <span>PancakeSwap</span>
                                            </div>
                                            <div class="scbi-symbol">
                                                <span>CAKE</span>
                                            </div>
                                        </div>
                                        <div class="scb-crypto-rank">
                                            <span>#12</span>
                                        </div>
                                    </a>

                                    <a class="scb-crypto">
                                        <div class="scb-crypto-info">
                                            <div class="scbi-icon">
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/8830.png" name="Neoteric" alt="Neoteric" class="atjc29-3 jqPrlG">                                            </div>
                                            <div class="scbi-name">
                                                <span>Neoteric</span>
                                            </div>
                                            <div class="scbi-symbol">
                                                <span>NTRC</span>
                                            </div>
                                        </div>
                                        <div class="scb-crypto-rank">
                                            <span>#2706</span>
                                        </div>
                                    </a>
                                    <a class="scb-crypto">
                                        <div class="scb-crypto-info">
                                            <div class="scbi-icon">
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/21061.png" name="Saudi Shiba Inu" alt="Saudi Shiba Inu" class="atjc29-3 jqPrlG">                                            </div>
                                            <div class="scbi-name">
                                                <span>Saudi Shiba Inu</span>
                                            </div>
                                            <div class="scbi-symbol">
                                                <span>SAUDISHIB</span>
                                            </div>
                                        </div>
                                        <div class="scb-crypto-rank">
                                            <span>#2789</span>
                                        </div>
                                    </a>
                                    <a class="scb-crypto">
                                        <div class="scb-crypto-info">
                                            <div class="scbi-icon">
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/3635.png" name="Cronos" alt="Cronos" class="atjc29-3 jqPrlG">                                            </div>
                                            <div class="scbi-name">
                                                <span>Cronos</span>
                                            </div>
                                            <div class="scbi-symbol">
                                                <span>CRO</span>
                                            </div>
                                        </div>
                                        <div class="scb-crypto-rank">
                                            <span>#23</span>
                                        </div>
                                    </a>
                                    <a class="scb-crypto">
                                        <div class="scb-crypto-info">
                                            <div class="scbi-icon">
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/5426.png" name="Solana" alt="Solana" class="atjc29-3 jqPrlG">                                            </div>
                                            <div class="scbi-name">
                                                <span>Solana</span>
                                            </div>
                                            <div class="scbi-symbol">
                                                <span>SOL</span>
                                            </div>
                                        </div>
                                        <div class="scb-crypto-rank">
                                            <span>#2856</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="sc-title">
                                    <span><span style="font-size: 12px;">Recent searches</span></span>
                                </div>
                                <div class="sc-recent-box">
                                    <div class="sc-recent">
                                        <img name="PancakeSwap" src="https://s2.coinmarketcap.com/static/img/coins/64x64/7186.png" alt="PancakeSwap" class="osuvy-0 kSjfxI">
                                        <p>PancakeSwap</p>
                                        <p>CAKE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-3">
                    <div class="header-3-title">
                        <h4>What Are The Trending Cryptocurrencies On AliMarketCap?</h4>
                        <p>Below is a list of the trending cryptocurrencies that people are searching for on CoinMarketCap.</p>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="img/1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/3.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/4.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="main">
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">24h</th>
                        <th scope="col">7d</th>
                        <th scope="col">30d</th>
                        <th scope="col">market gap</th>
                        <th scope="col">volume(24h)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img class="coin-logo" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1.png" alt="BTC logo">
                            </div>
                            Bitcoin
                        </td>
                        <td id="btc_price"></td>
                        <td>1.63%</td>
                        <td>21.64%</td>
                        <td>15.70%</td>
                        <td>$451,665,587,829</td>
                        <td>$40,459,922,475</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img class="coin-logo" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1027.png" alt="ETH logo">
                            </div>
                            Ethereum
                        </td>
                        <td id="_price">$1,376.24</td>
                        <td>9.54%</td>
                        <td>12.74%</td>
                        <td>11.95%</td>
                        <td>$167,497,683,461</td>
                        <td>$19,480,759,139</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img class="coin-logo" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1839.png" alt="BNB logo">
                            </div>
                            BNB
                        </td>
                        <td id="bnb_price">$35.13</td>
                        <td>8.49%</td>
                        <td>25.31%</td>
                        <td>13.80%</td>
                        <td>$12,150,969,919</td>
                        <td>$1,470,628,121</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/132.png" height="32" width="32" alt="XCP">
                            </div>
                            XCP
                        </td>
                        <td id="xcp_price">$35.13</td>
                        <td>8.49%</td>
                        <td>25.31%</td>
                        <td>13.80%</td>
                        <td>$12,150,969,919</td>
                        <td>$1,470,628,121</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/1710.png" height="32" width="32" alt="VERI">
                            </div>
                            Veritaseum
                        </td>
                        <td id="tkn_price">$35.13</td>
                        <td>8.49%</td>
                        <td>25.31%</td>
                        <td>13.80%</td>
                        <td>$12,150,969,919</td>
                        <td>$1,470,628,121</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-star-of-david"></i></th>
                        <td scope="row">1</td>
                        <td>
                            <div class="coin-logo-box">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/5225.png" height="32" width="32" alt="BAR">
                            </div>
                            FC Barcelona Fan Token

                        </td>
                        <td id="bar_price">$35.13</td>
                        <td>8.49%</td>
                        <td>25.31%</td>
                        <td>13.80%</td>
                        <td>$12,150,969,919</td>
                        <td>$1,470,628,121</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <div class="footer-title"></div>
            <div class="footer-body">
                <div class="footer-links">
                    <div class="footer-links-top">
                        <div class="flt-box">
                            <div class="flt-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="flt-title">
                                <p>Give US A Call</p>
                                <p>(+98)9142269686</p>
                            </div>
                        </div>
                        <div class="flt-box">
                            <div class="flt-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="flt-title">
                                <p>Send US A Message</p>
                                <p>alimorshedi06@gmail.com</p>
                            </div>
                        </div>
                        <div class="flt-box">
                            <div class="flt-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="flt-title">
                                <p>Office location</p>
                                <p>Iran - Bonab</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-links-lists">
                        <div class="fll-box">
                            <h3>Defency.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut debitis dicta dolore velit voluptas voluptatem.</p>
                            <div class="fll-box-icons">
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-telegram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="fll-box fll-links mx-2">
                            <h5>Quick Links</h5>
                            <a href="">About us</a>
                            <a href="">Services</a>
                            <a href="">Cases</a>
                            <a href="">Contact</a>
                        </div>
                        <div class="fll-box fll-links mx-2">
                            <h5>Useful links</h5>
                            <a href="">Privacy & Policy</a>
                            <a href="">Terms & Conditions</a>
                            <a href="">Support</a>
                            <a href="">FAQ</a>
                        </div>
                        <div class="fll-box">
                            <h5>Work Hours</h5>
                            <p><i class="fa-solid fa-clock"></i> 8AM - 5 PM , Monday - Saturday</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <button class="btn btn-outline-secondary">Call Us NOW !</button>
                        </div>
                    </div>
                </div>
                <div class="footer-copy-right">
                    <p>CopyRight <i class="fa-solid fa-copyright"></i> 2022 All Rights Reserved </p>
                    <p>Designed by Ali Morshedi</p>
                </div>

            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/js.js"></script>
    </body>
</html>