<style type="text/css">
    #fb-link :hover{
        color: white;
    }
  @media only screen and (max-width: 600px) {
          body {
            background-color: black;
          }
        }
        h1.main,
        p.demos {
            animation-delay: 8s;
        }
        .sp-container {
            width: 1100px;
            height: 400px;
            position: relative;
            padding: 40px 0px;
            /* margin: 190px auto 0px 40px; */
        }
        .sp-content {
            width: 100%;
            height: 400px;
            position: relative;
            /* animation: open 0.4s linear forwards, squeeze 0.6s linear 5.5s forwards; */
        }

        .sp-container h2 {
            color: #000;
            text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.9);
        }
        .sp-wrap {
            width: 500px;
            padding: 0px 25px;
            height: 100%;
            text-align: left;
            font-size: 70px;
            line-height: 80px;
            float: left;
            position: relative;

            overflow: hidden;
        }
        .sp-wrap span {
            display: block;
            width: 500px;
            filter: alpha(opacity=100);
            opacity: 1;
        }
        .sp-wrap span.sp-mid {
            filter: alpha(opacity=100);
            opacity: 1;
        }
        .sp-container .sp-right h2 {
            color: #fff;
            text-shadow: 0px 0px 1px rgba(255, 255, 255, 0.9);
        }
        .sp-wrap span.sp-mid {
            font-family: "MisoBold";
            text-transform: uppercase;
            font-size: 70px;
            line-height: 60px;
            position: relative;
        }
        .sp-left span.sp-top {
            animation: slideRight 0.5s ease-in 2s backwards,
            fadeOut 1s linear 4.4s backwards;
        }
        .sp-left span.sp-mid {
            animation: slideLeft 0.5s ease-in 1s backwards,
            fadeIn 0.6s linear 5s forwards;
        }
        .sp-left span.sp-bottom {
            animation: slideRight 0.5s ease-in 2s backwards,
                fadeOut 1s linear 4.4s backwards;
        }
        .sp-right span {
            text-align: left;
        }
        .sp-right span.sp-top {
            animation: slideRight 0.5s ease-in 2s backwards,
            fadeOut 1s linear 4.4s backwards;
        }
        .sp-right span.sp-mid {
            animation: slideRight 0.5s ease-in 2.4s backwards,
            fadeIn 0.6s linear 5s forwards;
        }
        .sp-right span.sp-bottom {
            animation: slideRight 0.5s ease-in 3.2s backwards,
            fadeOut 1s linear 4.6s backwards;
        }
        .sp-wrap i {
            position: absolute;

            width: 60px;
        }

        .sp-wrap i:last-child {
            filter: alpha(opacity=0);
            opacity: 0;
            animation: fadeOut 1s linear 6s backwards;
        }

      @keyframes open {
        0% {
          transform: scale(1, 0);
        }
        100% {
          transform: scale(1, 1);
        }
      }
      @keyframes squeeze {
        0% {
          height: 400px;
        }
        100% {
          height: 120px;
        }
      }
      @keyframes fadeOut {
        0% {
          opacity: 1;
        }
        100% {
          opacity: 0;
        }
      }
      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
      @keyframes slideLeft {
        0% {
          transform: translateX(120%);
        }
        100% {
          transform: translateX(0%);
        }
      }
      @keyframes slideRight {
        0% {
          transform: translateX(-120%);
        }
        /* 100% {
          transform: translateX(0%);
        } */
      }
      @keyframes moveUp {
        0% {
          transform: translateY(0px);
        }
        100% {
          transform: translateY(-170px);
        }
      }
      @keyframes zoomIn {
        0% {
          transform: scale(0);
        }
        100% {
          transform: scale(1);
        }
      }
      .battle-c-banner {
        font-family: "MisoRegular";
        width: 100%;
        background: url({{asset("public/images/banner.png")}}) no-repeat center center;
        background-size: auto;
        background-size: cover;
        background-color: black;
        -moz-background-size: cover;
        -o-background-size: cover;

        height: 530px;
      }

      .contact-class {
        color: #a7ea8f;
        font-size: 1.5rem;
        font-weight: bold;
      }
      @media only screen and (max-width: 600px) {
        .contact-class {
          color: #a7ea8f;
          font-size: 1.2rem;
          font-weight: bold;
        }
        .sp-container {
          width: 500px;
        }
      }
</style>


<div id="home" class="battle-c-banner img-fluid" style="margin-top: 74px;">
    <div class="sp-container">
        <div class="sp-content">
          <div class="sp-wrap sp-left">
            <h2>
              <span style="color: #fff; padding-top: 10px;" class="sp-mid"
                >Inform us</span
              >
              <span
                style="color: #e8ee85; font-weight: 800; font-size: 5rem;"
                class="sp-top"
                >Where
              </span>

              <span
                style="color: #e8ee85; font-size: 4rem; font-weight: bold;"
                class="sp-bottom"
                >people</span
              >
              <span
                style="color: #e8ee85; font-size: 4rem; font-weight: bold;"
                class="sp-bottom"
                >are starving</span
              >
              <span
                style="color: #a7ea8f; font-size: 4rem; font-weight: bold;"
                class="sp-bottom" id="fb-link"
                ><a href="https://facebook.com/battlec19">Join with BattleC19</a></a></span
              >
            </h2>
          </div>
        </div>
        <div
          class="d-flex justify-content-xl-end justify-content-md-center justify-content-sm-start"
        >
          <div class="sp-wrap sp-right">
            <h2>
              <span class="sp-bottom contact-class"
                >Contact : #01743874471 #01688284976 #01741934933 <br />
                #01310854516 #01633138396 #01889463363</span
              >
            </h2>
          </div>
        </div>
    </div>
</div>