<head>
    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i');

html, body {
    font-family: 'Roboto', sans-serif;
}
{
        box-sizing: border-box;
    }
    /* Set additional styling options for the columns */
    .column {
    float: left;
    }

    /* Set width length for the left, right and middle columns */
    .left {
    width: 40%;
    }

    .middle {
    width: 40%;
    }
    
    .right {
    width: 50%;
    }

    .row:after {
    content: "";
    display: table;
    cl
#col {
  column-count: 3;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}
input[type=number] {
    -moz-appearance:textfield;
}
.custom-container {
    max-width: 1500px;
    margin: auto;
}
.no-shadow {
    box-shadow: none !important;
}
.font-italic {
    font-style: italic !important;
}
.font-medium {
    font-weight: 500 !important;
}
.font-bold {
    font-weight: 700 !important;
}
.color-black {
    color: #000 !important;
}
.color-white {
    color: #fff !important;
}
.color-purple {
    color: #924bd7 !important;
}
.margin-top-content {
    margin-top: 82px;
}
.relative-top-50 {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
.login-w {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    background: #000000ba;
    z-index: 10000;
}
.login {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    max-width: 500px;
    width: 90%;
    padding: 20px;
}
.login form input {
    width: 100%;
    border: none;
    background: #e8e8e8;
    padding: 10px 15px;
    margin-bottom: 10px;
}
.login .btns-w {
    text-align: right;
}
.login button {
    border: none;
    color: #fff;
    padding: 10px 20px;
    margin-bottom: 10px;
}
.login [type="submit"] {
    background: #5dcb54;
    margin-right: 10px;
}
.login .btn-signup {
    background: #a46bdd;
}
.login .btn-facebook {
    background: #3381c4;
}
.login .btn-facebook img {
    height: 22px;
    margin-right: 10px;
    float: left;
}
.login .forgot-password {
    text-align: right;
    margin-bottom: 30px;
}
.filters-w {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 10000;
}
.filters-w ul {
    margin: 0;
    padding: 0;
    list-style: none;
    text-align: center;
    color: #fff;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: inline-block;
}
.filters-w ul li {
    cursor: pointer;
    margin: 15px 0;
    border-radius: 15px;
    padding: 10px 15px;
}
.filters-w ul li.active {
    background: #fff;
    color: black;
}
.page-title {
    font-size: 38px;
    margin: 30px 0;
}
.btn-cancel {
    background: #fc2b2b;
}

/* navbar design*/
.nav-bg {
    background: #1c1c1c;
    height: 82px;
    transition: 0.2s background;
}
.nav-btn {
    border: none;
    outline: none !important;
    margin-right: 15px !important;
    padding: 0;
    vertical-align: middle;
}
.nav-bar {
    background: #fff;
    height: 0.25rem;
    width: 2rem;
    margin-bottom: 5px;
}
.nav-bar:last-child {
    margin-bottom: 0px;
}
.nav-btn-img-w {
    position: relative;
    display: inline-flex;
}
.nav-btn-img-w img {
    height: 30px;
}
.nav-search-icon {
    height: 15px;
}
.btn-search-go img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 13px;
}
.nav-right-btn {
    display: inline-block;
    padding: 0px 5px;
}
.nav-right-btn:last-child {
    padding-right: 0px;
}
.nav-right-btn .img-icon {
    width: 1.5rem;
}
.menu-w {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    background: #000000ba;
    z-index: 10000;
}
.menu {
    padding: 0;
    margin: 0;
    position: absolute;
    top: 0;
    left: -400px;
    width: 350px;
    max-width: 100%;
    font-style: italic;
    font-weight: 700;
    list-style: none;
    transition: 0.5s all;
}
.menu.open {
    left: 0px;
}
.close-menu {
    margin: 30px;
    width: 20px;
    float: right;
    cursor: pointer;
}
.menu li:first-child {
    background: #767676;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    height: 82px;
    line-height: 82px;
    padding: 0px;
    padding-left: 20px;
}
.menu a {
    color: #767676;
}
.menu a.active,
.menu a:hover {
    color: #000;
    text-decoration: none;
}
.menu li {
    background: #fff;
    padding: 20px 20px;
    border-bottom: 1px solid #767676;
}
.menu li .fa {
    font-size: 18px;
    margin-left: 10px;
}
.menu li .fa:hover {
    color: #924bd7;
}
.profile-w {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    background: #000000ba;
    z-index: 10000;
}
.profile {
    padding: 0;
    margin: 0;
    position: absolute;
    top: 0;
    right: -400px;
    width: 350px;
    max-width: 100%;
    font-style: italic;
    font-weight: 700;
    list-style: none;
    transition: 0.5s all;
}
.profile.open {
    right: 0px;
}
.close-menu {
    margin: 30px;
    width: 20px;
    float: right;
    cursor: pointer;
}
.profile .avatar-img {
    margin-right: 10px;
}
.profile li:first-child {
    background: #767676;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    height: 82px;
    line-height: 82px;
    padding: 0px;
    padding-left: 20px;
}
.profile a {
    color: #767676;
}
.profile a.active,
.profile a:hover {
    color: #000;
    text-decoration: none;
}
.profile li {
    background: #fff;
    padding: 20px 20px;
    border-bottom: 1px solid #767676;
}
.notifications {
    display: none;
    position: fixed;
    top: 82px;
    right: 105px;
    background: #fff;
    width: 473px;
    z-index: 100;
}
.notification-user-img-w {
    width: 50px;
}
.notification-text-w {
    width: calc(100% - 75px);
}
.notification-text-w div {
    padding: 5px 10px;
}
.notification-icon-w {
    width: 25px;
    padding-top: 5px;
}
.notification-icon-w img {
    width: 100%;
}
.notifications ul {
    margin: 0;
    padding: 0px;
    list-style: none;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
.notifications li {
    padding: 15px;
    border-bottom: 2px solid #0000003b;
}
.notifications li:last-child {
    border-bottom: none;
}
.notification {
    margin: 0px;
    font-style: italic;
    font-size: 14px;
}
.notification a {
    color: #000;
    font-weight: 700;
}
.notifications .date {
    margin: 0px;
    font-style: italic;
    font-size: 12px;
}
input, textarea, select {
    outline: none;
    resize: none;
}
.uploads {
    color: white;
    padding-top: 23px;
    padding-left: 20px;
    padding-right: 20px;
}

.load-more {
    border-radius: 0;
    background-color: black;
    color: white;
    text-transform: capitalize;
    border: none;
    font-style: italic;
    font-weight: 500;
}
button {
    outline: none;
}

a {
    outline: none;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 1.25rem 1.5rem;
    clear: both;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
a.dropdown-itemss {
    background-color: lightgray;
    color: white;
    font-weight: 700;
    font-size: 20px;
}
.display-inline {
    display: inline-block;
}
.dropdown-menu.dropdown-menu-right.position-absolute.show {
    width: 500px;
    padding: 0;
    left: -400px;
}

.bell {
    padding-top: 15px;
    color: white;
}
.input-group-prepend {
    background-color: #767676;
    border: 0 !important;
    color: white;
    border-radius: 0px;
}
.bg-transparent .input-group-prepend {
    background-color: rgba(221, 221, 221, 0.5);
}
.avatars-img {
    width: 13%;
    height: 100%;
}
.input-circle {
    border-radius: 50%;
    width: 22%;
    background-color: lightgray;
    padding-left: 4px;
    color: white;
    border: 0;
}
.comments {
    color: black;
}
.stars {
    color: yellow;
}
.divs {
    position: absolute;
    top: 50%;
    right: 0;
}
.imag {
    display: inline-block;
}
.display {
    white-space: normal;
    vertical-align: middle;
    display: inline-block;
}
.span-display {
    display: flex;
}
input::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: white;
    opacity: 1; /* Firefox */
}
.nav-height {
    height: 80px;
}
.avatar-img {
    border: 2px solid #924bd7;
    border-radius: 50%;
    width: 50px;
}
.dropdown-toggle::after {
    display: none;
}

:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: white;
}

::-ms-input-placeholder {
    /* Microsoft Edge */
    color: white;
}
.search-w .input-group {
    height: 30px;
}
input#example-search-input {
    background-color: #767676;
    border: none !important;
    color: white;
    outline: none;
    box-shadow: none;
    font-size: 16px;
    transition: 0.2s all;
}
.bg-transparent input#example-search-input {
    background-color: rgba(221, 221, 221, 0.5);
}

input#example-search-input::placeholder {
    color: #fff;
    font-style: italic;
}

button.btn.btn-outline-secondary.border-left-0.border {
    background-color: #767676;
    border: 0 !important;
    color: white;
    border-radius: 0px;
    padding-right: 20px;
    transition: 0.2s all;
}
.bg-transparent button.btn.btn-outline-secondary.border-left-0.border {
    background-color: rgba(221, 221, 221, 0.5);
}
a.dropdown-itemsss {
    border-bottom: 2px solid lightgray;
}
.input-group-text.bg-transparent.border-right-0 {
    border: 0 !important;
    color: white;
}

/* end navbar css */

/* start home section css */

.section-height {
    position: relative;
    height: 400px;
    margin-top: 82px;
}
.img-section {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.section-height .centered {
    height: 100%;
    width: 100%;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.color-star {
    height: 30px;
    margin-top: 30px;
    text-align: center;
    color: white;
}
.color-star img {
    height: 100%;
}
.film-month {
    color: white;
    font-size: 17px;
    font-style: italic;
    font-weight: 500;
    text-align: center;
    margin-top: 15px;
}
.keep-moving {
    color: white;
    font-size: 30px;
    font-style: italic;
    text-align: center;
}

.author-name {
    color: white;
    font-size: 15px;
    text-align: center;
    font-style: italic;
    margin-top: 5px;
}
.author-name u {
    font-weight: 700;
}

.circular-chart-w {
    margin: 15px 0px;
}

.circular-chart-c {
    position: relative;
    display: inline-block;
    width: 100px;
    color: #fff;
    font-style: italic;
    text-align: center;
}

.svg-w {
    position: relative;
}

.circular-chart {
    display: block;
    margin: 0 auto;
    max-width: 80%;
    max-height: 250px;
}

.circle {
    stroke: #fff;
    fill: none;
    stroke-width: 1.5;
    stroke-linecap: round;
    animation: progress 2s ease-out forwards;
}

.circle-background {
    stroke: #bbb;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
}

.circular-chart.creativity-chart .circle {
    stroke: #ff3333;
}

.circular-chart.creativity-chart .circle-background {
    stroke: rgba(247, 71, 71, 0.4);
}

.circular-chart.story-chart .circle {
    stroke: #ff9900;
}

.circular-chart.story-chart .circle-background {
    stroke: rgba(255, 153, 0, 0.4);
}

.circular-chart.direction-chart .circle {
    stroke: #3399ff;
}

.circular-chart.direction-chart .circle-background {
    stroke: rgba(51, 153, 255, 0.4);
}

.circular-chart.cast-chart .circle {
    stroke: #00cc99;
}

.circular-chart.cast-chart .circle-background {
    stroke: rgba(0, 204, 153, 0.4);
}

@keyframes progress {
    0% {
        stroke-dasharray: 0 100;
    }
}

.circular-chart-c .rate {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-style: italic;
    font-weight: 700;
    font-size: 18px;
    background: transparent;
    border: none;
    text-align: center;
    width: 50px;
}

.detail-video .circular-chart-c,
.detail-video .circular-chart-c .rate {
    color: #000;
}

.btn-play-now {
    background: #fff;
    border: none;
    color: #000;
    font-weight: 700;
    font-style: italic;
    padding: 5px 15px;
    margin-top: 15px;
}

@-webkit-keyframes load {
    0% {
        stroke-dashoffset: 0;
    }
}
@-moz-keyframes load {
    0% {
        stroke-dashoffset: 0;
    }
}
@keyframes load {
    0% {
        stroke-dashoffset: 0;
    }
}
.progress {
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: auto;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: transparent;
    border-radius: 0.25rem;
}
.progress > li {
    height: 109px;
    display: inline-block;
    position: relative;
    text-align: center;
    color: #93a2ac;
    font-family: Lato;
    font-weight: 100;
    margin: 2rem;
}

.progress > li:before {
    content: attr(data-name);
    position: absolute;
    width: 100%;
    bottom: -2rem;
    color: white;
}

.progress > li:after {
    content: attr(data-percent);
    position: absolute;
    width: 100%;
    top: 68px;
    left: 0;
    font-size: 1rem;
    text-align: center;
    color: white;
}

.progress svg {
    width: 4rem;
    height: 10rem;
}

.progress svg:nth-child(2) {
    position: absolute;
    left: 0;
    top: 0;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
}

.progress svg:nth-child(2) path {
    fill: none;
    stroke-width: 25;
    stroke-dasharray: 629;
    stroke: rgba(255, 255, 255, 0.9);
    -webkit-animation: load 1s;
    -moz-animation: load 1s;
    -o-animation: load 1s;
    animation: load 1s;
}

input.btn.btn-play {
    padding-left: 20px;
    background-color: white;
    border: 0;
    border-radius: 0;
    padding-right: 20px;
}
.upload {
    color: lightgray;
    font-size: 14px;
}
.title {
    text-align: left;
    color: white;
    font-size: 15px;
}
.student {
    color: white;
    font-size: 12px;
    text-align: left;
}
.video-name {
    padding: 13px;
    background-color: lightgray;
    width: 100%;
}
.share {
    position: absolute;
    bottom: 15px;
    left: 15px;
}
.share img {
    width: 40px;
}
.video-types {
    height: 50px;
    display: inline-block;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #000;
    background-color: transparent;
    font-weight: 700;
}
.trending-icon {
    height: 30px;
    margin-right: 5px;
    display: inline-block;
}
.nav-item {
    display: inline-block;
    position: relative;
    height: 50px;
    line-height: 50px;
    padding: 0 15px;
}
.nav-item:first-child {
    padding-left: 0;
}
.nav-item:last-child {
    padding-right: 0;
}
.nav-item:after {
    content: " ";
    position: absolute;
    top: 50%;
    right: 0;
    width: 1.5px;
    height: 12px;
    background: #000;
    transform: translateY(-50%) rotate(10deg);
}
.history .nav-item:after {
    background: #fff;
}
.nav-item:last-child:after {
    display: none;
}
a.nav-link.links.active:after {
    content: " ";
    background: #924bd7;
    width: 100%;
    height: 2px;
    position: absolute;
    bottom: -5px;
    left: 0px;
}

.history a.nav-link.links.active:after {
    background: #fff;
}

/* end home section css */

/* start video section css */
.home-video {
    padding: 15px;
    padding-bottom: 0px;
    box-shadow: 0px 0px 10px #0000004a;
}
.detail-video .home-video {
    border: none;
    padding-top: 0px;
}
.home-video .rate-it-btn {
    background: #000;
    border: none;
    color: #fff;
    padding: 5px 10px;
    font-style: italic;
    font-weight: 500;
    margin-top: 15px;
    cursor: pointer;
    transition: 0.2s all;
}
.home-video .rate-it-btn:hover {
    background: #924bd7;
}
.detail-video .home-video video {
    display: block;
}
.detail-video .home-video .video-w {
    height: 300px;
    margin-top: 0px;
}
.detail-video .circular-chart-w {
    padding-right: 30px;
}
.detail-video .rate-w {
    margin-top: 0px;
}
.video-comments {
    padding: 0;
    margin: 0;
}
.video-comments p {
    margin: 0 0 0 60px;
}
.video-comments li:first-child {
    border-radius: 0px;
}
.video-comments li:hover {
    z-index: 0;
}
.video-comment:first-child {
    border-top: 0px;
}
.user-img {
    width: 50px;
    float: left;
}
.home-video .user-info {
    width: calc(100% - 10px);
    display: inline-block;
}
.home-video .user-info .user-name {
    font-size: 14px;
    font-style: italic;
    font-weight: 700;
    margin: 5px 0 0 60px;
}
.uploaded-date,
.comment-text {
    font-size: 12px;
    font-style: italic;
    color: #7e7e7e;
    margin: 0 0 0 60px;
}
.other-btn-w {
    position: relative;
    display: inline-block;
    width: 10px;
    text-align: right;
}
.other-btn-w button {
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    vertical-align: middle;
}
.other-btn-w button:hover {
    background: none !important;
}
.other-btn-w button:focus {
    outline: none !important;
    background: none !important;
    border: none !important;
    box-shadow: none !important;
}
.other-btn-w button div {
    width: 5px;
    height: 5px;
    background: #000;
    border-radius: 90px;
    margin-bottom: 3px;
}
.other-btn-w .dropdown-menu {
    padding: 0;
    margin-top: 5px;
}
.other-btn-w button div:last-child {
    margin-bottom: 0;
}
.home-video video {
    display: none;
    width: 100%;
    height: 100%;
}
.video-w {
    position: relative;
    margin-top: 15px;
    height: 200px;
    overflow: hidden;
}
.video-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 99;
}
.video-overlay .cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}
.video-overlay .play {
    width: 50px;
    height: 50px;
    position: absolute;
    top: 47%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
}
.detail-video .video-overlay .play {
    width: 100px;
    height: 100px;
}
.overlay-icons {
    position: absolute;
    bottom: 0px;
    width: 100%;
    height: 60px;
}
.overlay-icons .icon-col {
    color: #fff;
    font-style: italic;
    font-size: 12px;
    padding: 3px 30px;
}
.overlay-icons .icon-col img {
    width: 18px;
}
.circular-chart-c.small {
    width: 100%;
    max-width: 50px;
}
.circular-chart-c.small .circular-chart {
    margin: 0;
    max-width: 100%;
}
.circular-chart-c.small .rate {
    font-size: 10px;
    width: 30px;
    color: #000;
}
.circular-chart-c.small span {
    color: #000;
    display: block;
}
.circular-chart-c.mid {
    width: 75px;
}
.video-details {
    position: absolute;
    padding: 10px;
    color: #fff;
    font-style: italic;
    font-size: 12px;
}
.video-details p {
    margin: 0px;
}
.video-details p:first-child {
    font-size: 14px;
    font-weight: 500;
}
.video-rating {
    padding: 15px;
    min-height: 120px;
    font-size: 14px;
}
.video-rating .title {
    text-align: center;
    margin: 0px;
    color: #000;
    font-style: italic;
    font-weight: 500;
}
.video-rating .message {
    line-height: 100px;
}
.video-rating .message a {
    color: #000;
    font-weight: 500;
}
.rate-w {
    font-style: italic;
    font-size: 12px;
    text-align: center;
    margin-top: 10px;
}
.rate-w label {
    display: block;
}
.rate-w input[type="number"] {
    width: 30px;
    height: 30px;
    background: #b4b4b4;
    border: none;
    border-radius: 50%;
    color: #fff;
    font-weight: 700;
    text-align: center;
}
.rate-w input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}
.margin-top-30 {
    margin-top: 30px;
}
.margin-bottom-30 {
    margin-bottom: 30px;
}
.go-to-video-w {
    background: #b4b4b4;
    font-style: italic;
    font-size: 12px;
    text-align: center;
    width: 100%;
    padding: 15px;
}
.go-to-video-w a {
    color: #000;
}
.video-write-comment {
    width: 100%;
    background: #e4e4e4;
    padding: 15px;
}
.video-write-comment input {
    width: calc(100% - 60px);
    border: none;
    font-size: 12px;
    padding: 15px;
    margin-left: 10px;
    height: 50px;
}
.video-write-comment input::placeholder {
    color: #000;
    font-style: italic;
}
.view-all-comments {
    background: #1b1b1b;
    width: 100%;
    color: #fff;
    text-align: center;
    font-style: italic;
    font-size: 14px;
    text-decoration: underline;
    padding: 10px 0px;
    cursor: pointer;
}
.demo {
    position: relative;
    padding: 30px;
}
.history .demo {
    padding-top: 0px;
}
@media (max-width: 767px) {
    .nav-tabs.nav-tabs-dropdown,
    .nav-tabs-dropdown {
        border: 1px solid #dddddd;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
    }
    .nav-tabs.nav-tabs-dropdown::after,
    .nav-tabs-dropdown::after {
        content: "â˜°";
        position: absolute;
        top: 8px;
        right: 15px;
        z-index: 2;
        pointer-events: none;
    }
    .nav-tabs.nav-tabs-dropdown.open a,
    .nav-tabs-dropdown.open a {
        position: relative;
        display: block;
    }
    .nav-tabs.nav-tabs-dropdown.open > li.active > a,
    .nav-tabs-dropdown.open > li.active > a {
        background-color: #eeeeee;
    }
    .nav-tabs.nav-tabs-dropdown li,
    .nav-tabs-dropdown li {
        display: block;
        padding: 0;
    }
    .nav-tabs.nav-tabs-dropdown > li > a,
    .nav-tabs-dropdown > li > a {
        position: absolute;
        top: 0;
        left: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        display: inline-block;
        border-color: transparent;
    }

    .nav-tabs.nav-tabs-dropdown > li > a:focus,
    .nav-tabs-dropdown > li > a:focus,
    .nav-tabs.nav-tabs-dropdown > li > a:hover,
    .nav-tabs-dropdown > li > a:hover,
    .nav-tabs.nav-tabs-dropdown > li > a:active,
    .nav-tabs-dropdown > li > a:active {
        border-color: transparent;
    }
    .nav-tabs.nav-tabs-dropdown > li.active > a,
    .nav-tabs-dropdown > li.active > a {
        display: block;
        border-color: transparent;
        position: relative;
        z-index: 1;
        background: #fff;
    }
    .nav-tabs.nav-tabs-dropdown > li.active > a:focus,
    .nav-tabs-dropdown > li.active > a:focus,
    .nav-tabs.nav-tabs-dropdown > li.active > a:hover,
    .nav-tabs-dropdown > li.active > a:hover,
    .nav-tabs.nav-tabs-dropdown > li.active > a:active,
    .nav-tabs-dropdown > li.active > a:active {
        border-color: transparent;
    }
}
.rating {
    padding-top: 15px;
    width: 100%;
    color: black;
    text-decoration: underline;
    text-align: center;
    float: left;
}
.div-height {
    margin-top: 10px;
    height: 235px;
    position: relative;
}
.eye {
    color: white;
    position: absolute;
    top: 86%;

    transform: translate(50%);
}
.heart {
    color: #fff;
    font-size: 18px;
    vertical-align: middle;
    cursor: pointer;
}
.heart:hover,
.heart.liked {
    color: #ff0000;
}
.share-icon {
    color: #fff;
    font-size: 20px;
    vertical-align: middle;
}
.viewers-icon {
    color: #fff;
    font-size: 20px;
    vertical-align: middle;
    margin-bottom: 2px;
}
.heart-likes {
    color: white;
    position: absolute;
    right: 0;
    top: 86%;
    left: 82%;
}
.avatars-imgs {
    width: 13%;
    height: 100%;
    padding-top: 17px;
}
.view-comments {
    float: left;
    background-color: black;
    text-decoration: underline;
    font-style: italic;
    color: white;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
}

.overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
}
.overlay:hover {
    visibility: hidden;
}
.text-left.height {
    padding: 13px;
    float: left;
    background-color: lightgray;
}
.background-float {
    box-shadow: 5px 0 5px -5px lightgray;
    padding-top: 10px;
    float: left;
    border-top: 2px solid black;
}

.p-t {
    padding-left: 0;
    padding-right: 0;
    padding-top: 30px;
    padding-bottom: 30px;
}
.share-video {
    position: absolute;
    right: 0;
    top: 76%;
    left: 80%;
    color: white;
}
.progres {
    position: absolute;
    right: 0;
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: auto;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: transparent;
    border-radius: 0.25rem;
}
.progres > li {
    height: 113px;
    display: inline-block;
    position: relative;
    text-align: center;
    color: #93a2ac;
    font-family: Lato;
    margin: 10px;
    left: -10px;
    top: -65px;
}

.progres > li:before {
    content: attr(data-name);
    position: absolute;
    width: 100%;
    bottom: 0rem;
    font-weight: 400;
    color: white;
}

.progres > li:after {
    content: attr(data-percent);
    position: absolute;
    width: 100%;
    top: 82px;
    left: 0;
    font-size: 10px;
    text-align: center;
    color: white;
}
.links {
    color: black;
    font-style: italic;
    text-decoration: none;
    font-weight: 700;
    position: relative;
    font-size: 16px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    padding: 0;
}
.links:hover {
    color: black;
    text-decoration: none;
}
.no-border {
    border: 0 !important;
}
.progres svg {
    width: 2rem;
    height: 10rem;
}

.progres svg:nth-child(2) {
    position: absolute;
    left: 0;
    top: 0;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
}

.progres svg:nth-child(2) path {
    fill: none;
    stroke-width: 25;
    stroke-dasharray: 629;
    stroke: rgba(255, 255, 255, 0.9);
    -webkit-animation: load 1s;
    -moz-animation: load 1s;
    -o-animation: load 1s;
    animation: load 1s;
}

.padd-10 {
    padding-top: 30px;
}
/* end video section css */

/* start history section css */
.history {
    background: #1b1b1b;
    color: #fff;
}

.sect-height {
    margin-top: 82px;
}

.his {
    width: 100%;
    text-align: center;
    font-size: 100px;
    font-weight: 700;
    text-transform: uppercase;
    color: #454545;
}

.history .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
}

.history .links {
    color: #fff;
}

.history .links:hover {
    color: #fff;
}

.history .home-video {
    background: #454545;
    border-top: 2px solid #b4b4b4;
    box-shadow: none;
}

.history .load-more {
    background-color: #fff;
    color: #1c1c1c;
}

.history .rate-w input[type="number"] {
    background: #fff;
    color: #454545 !important;
}

.history .video-rating .title {
    color: #fff;
}

/* end history section css */

/* video detail page */
.detail-video {
    margin-top: 82px;
}
.detail-video .container {
    width: 800px;
    max-width: 100%;
}
.detail-video .video-details {
    margin-top: 20px;
    padding-left: 45px;
    background: transparent;
}
.detail-video .video-details .title {
    font-size: 25px;
}
.detail-video .video-details .subtitle {
    font-size: 20px;
}
.detail-video .circular-chart-c {
    margin: 0 10px;
}
.detail-video .circular-chart-c:first-child {
    margin-left: 0;
}
.detail-video .circular-chart-c:last-child {
    margin-right: 0;
}
.video-overlay .play-now {
    position: absolute;
    top: calc(50% + 50px);
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-style: italic;
    width: auto !important;
    height: auto !important;
}
.go-back {
    width: 100%;
    color: black;
}
.go-back a:hover {
    text-decoration: underline;
}
.divs-height {
    height: 500px;
    position: relative;
}
.video-names {
    padding: 13px;

    width: 100%;
}
.full-screen {
    position: absolute;
    bottom: 15px;
    right: 15px;
    cursor: pointer;
}

.progresss {
    top: -47px;
    right: 0;
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: auto;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: transparent;
    border-radius: 0.25rem;
    position: absolute;
}
.progresss > li {
    height: 125px;
    display: inline-block;
    position: relative;
    text-align: center;
    color: #93a2ac;
    font-family: Lato;
    font-weight: 100;
    margin: 1rem;
}


.progresss > li:before {
    content: attr(data-name);
    position: absolute;
    width: 100%;
    bottom: -1rem;
    font-weight: 400;
    color: white;
}

.progresss > li:after {
    content: attr(data-percent);
    position: absolute;
    width: 100%;
    top: 68px;
    left: 0;
    font-size: 1rem;
    text-align: center;
    color: white;
}

.progresss svg {
    width: 4rem;
    height: 10rem;
}

.progresss svg:nth-child(2) {
    position: absolute;
    left: 0;
    top: 0;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
}

.progresss svg:nth-child(2) path {
    fill: none;
    stroke-width: 25;
    stroke-dasharray: 629;
    stroke: rgba(255, 255, 255, 0.9);
    -webkit-animation: load 1s;
    -moz-animation: load 1s;
    -o-animation: load 1s;
    animation: load 1s;
}

.viewers-position {
    text-align: right;
    position: relative;
    width: 100%;
    padding: 15px 0px;
    height: 60px;
}

.viewers-position div {
    display: inline-block;
    padding: 0px 10px;
    height: 100%;
}

.viewers-position .fa-share-alt {
    font-size: 24px;
}

.view-eye {
    position: relative;
    padding: 15px 0px;
    height: 60px;
}

.view-eye .fa-eye {
    font-size: 30px;
    display: inline-block;
    float: left;
}

.viewers {
    display: inline-block;
    height: 30px;
    line-height: 30px;
    margin-left: 5px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
}

.viewers-right {
    display: inline-block;
    margin-right: 5px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
    line-height: 30px;
}

.img-circle {
    width: 60%;
}
.media-left {
    width: 66px;
}

.list {
    width: 100%;
    border: 0;
    border-top: 1.5px solid lightgray;
    padding: 15px 0px;
}

.all-comments {
    text-decoration: underline !important;
    font-weight: 500;
    font-style: italic;
}
.filter-w {
    text-align: right;
}
.filter {
    line-height: 50px;
    font-size: 14px;
    font-weight: 700;
    font-style: italic;
}
.filter img {
    cursor: pointer;
    margin-left: 10px;
    height: 25px;
}
.media-body {
    font-style: italic;
}
.media-body span:first-child {
    font-size: 18px;
}
.media-body a.user {
    font-weight: 700;
}
.ratings {
    color: black;
    text-align: left;
    float: left;
    font-style: italic;
    font-weight: 700;
}
.rating-value {
    width: 44%;
    float: right !important;
}

.nb-comments {
    font-weight: 700;
    font-style: italic;
    border: none;
}

/* About and Contact page */
.cover {
    position: relative;
    height: 600px;
}
.cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
}
.cover img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* About page */
.about-page .paragraph {
    font-size: 14px;
    white-space: pre-line;
}
.about-page hr {
    border-top: 2px solid #000;
}

/* Contact page */
.contact-page textarea {
    display: block;
    margin: 15px 0;
    border: none;
    background: #ddd;
}
.contact-page [type="submit"] {
    background: #000;
    border: 0;
    float: right;
    padding: 10px 20px;
    margin-bottom: 15px;
}

/* Watch page */
.video-user-info img {
    width: 50px;
}
.video-user-info p {
    margin: 0 0 0 60px;
}
.detail-video .video-rating {
    padding: 0 15px;
    min-height: 0;
}
.detail-video .home-video .rate-it-btn {
    margin-top: 0;
}
.detail-video .after:after {
    content: " ";
    position: absolute;
    top: 0;
    right: 0;
    width: 1.5px;
    height: 100%;
    background: #e4e4e4;
}

/* Profile page */
.profile-page {
    margin-top: 82px;
}
.profile-top {
    display: inline-flex;
    list-style: none;
    margin: 0;
    padding: 30px 0px 20px 0;
    color: #8b8b8b;
    border-bottom: 1.5px solid #ddd;
}
.profile-top li {
    position: relative;
    padding: 0 45px;
}
.profile-top li:after {
    content: " ";
    position: absolute;
    top: 50%;
    right: 0;
    height: 100%;
    width: 1.5px;
    background: #ddd;
    transform: translateY(-50%) rotate(10deg);
}
.profile-top li:last-child:after {
    display: none;
}
.profile-top .user-img-w img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    margin-right: 20px;
    border: 2px solid #9956d9;
    border-radius: 100%;
}
.profile-top span {
    display: block;
}
.profile-top .user-name {
    color: #000;
    font-size: 18px;
}
.profile-top .viewers-nb {
    font-size: 12px;
    margin-top: 5px;
    color: #bbb;
}
.profile-top .social-media {
    font-size: 22px;
}

.profile-top .social-media i {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    vertical-align: top;
}

/* Settings and sign up pages */
.settings .page-title {
    padding: 30px 0 0 0;
    font-size: 28px;
}
.settings .upload-preview {
    position: relative;
    width: 200px;
    height: 200px;
    background: #767676;
    margin: auto;
    border-radius: 100%;
    color: #fff;
    margin-bottom: 30px;
    cursor: pointer;
    box-shadow: 0 0 15px -5px rgba(0, 0, 0, 0.5);
}
.settings .upload-preview.img-loaded {
    background: none;
}
.settings .upload-preview.img-loaded span {
    display: none !important;
}
.settings .upload-preview img {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    transform: translate(-50%, -50%);
    border-radius: 100%;
}
.settings .upload-preview .preview[src=""] {
    display: none;
}
.settings .upload-preview-w input {
    opacity: 0;
} 
.settings .upload-preview .plus {
    width: 50px;
    height: 50px;
    background: #924bd7;
    position: absolute;
    bottom: 10px;
    right: 10px;
    border-radius: 100%;
    border: 2px solid #fff;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
    cursor: pointer;
}
.settings .upload-preview .plus img {
    width: 20px;
    height: 20px;
    border-radius: 0px;
}
.settings .upload-preview .plus div {
    background: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.settings .upload-preview .plus div:first-child {
    width: 5px;
    height: 20px;
}
.settings .upload-preview .plus div:last-child {
    height: 5px;
    width: 20px;
}
.settings ul {
    margin: 0;
    list-style: none;
    padding: 0 0 45px 0;
}
.settings li {
    position: relative;
    border-top: 1.5px solid #ddd;
    padding: 10px 0;
}
.settings li:last-child {
    border-bottom: 1.5px solid #ddd;
}
.settings li span {
    white-space: nowrap;
    margin-right: 10px;
}
.settings li input::placeholder {
    color: #bbb;
}
.settings li input,
.settings li select,
.settings li textarea {
    width: 100%;
    border: none;
}
.settings li img {
    width: 20px;
    object-fit: contain
}
.settings li select + img {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
}
.settings .btn-w {
    padding: 0 0 45px 0;
}
.settings .btn-w button {
    padding: 5px 15px;
    border: none;
    display: inline-block;
    vertical-align: middle;
    color: #fff;
}
.settings .btn-w [type="submit"] {
    background: #000;
    margin-right: 10px;
}
.settings .btn-save {
    margin: 30px 0 0 0;
    padding: 10px 15px;
    border: none;
    background: #000;
    color: #fff;
}
.settings .btn-save img {
    margin-left: 10px;
}
.settings select {
    -moz-appearance:none;
    -webkit-appearance:none;
    appearance:none;
}
/* Publish video page */
.publish {
    margin-bottom: 15px;
}
.publish video[src=""] {
    display: none;
}
.publish video {
    max-width: 100%;
    max-height: 300px;
    display: block;
    margin: 15px auto 0 auto;
}
.publish label[for="video-upload"] {
    background: #767676;
    color: #fff;
    padding: 7px 15px;
    cursor: pointer;
    margin: 15px 0px;
}
.publish input[id="video-upload"] {
    position: absolute;
    top: -100vh;
}
.publish .input-w {
    font-size: 18px;
    margin-bottom: 15px;
}
.publish .input-w span {
    margin-bottom: 15px;
}
.publish .input-w input,
.publish .input-w textarea {
    width: 100%;
    border: none;
    padding: 5px 15px;
    box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.2);
}
.publish .input-w input::placeholder {
    color: #bbb;
}
.publish .category {
    background:blue;
    margin: 0 5px 5px 0;
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
}
.publish input:checked + .category {
    background:blueviolet;
    color:blue;
}
.publish button {
    border: none;
    color: #fff;
    padding: 7px 15px;
}
.publish [type="submit"] {
    background: #b9b9b9;
    margin-right: 5px;
}

footer.dark {background: #1c1c1c;}

footer.dark a {
    color: #fff;
}

footer.dark .row {
    padding: 0px 15px;
    margin: 0px;
    color: #000;
}

footer.dark .col-lg-3:first-child a {
    color: #fff;
}

footer {
    font-size: 14px;
    padding: 15px 0px;
    color: #000;
}

footer a {
    color: #000;
}

footer .row {
    padding: 0px 15px;
    margin: 0px;
    color: #000;
}

footer .col-lg-3,
footer .col-lg-6 {
    display: flex;
    align-items: center;
}

footer .col-lg-3:first-child a {
    padding-right: 7px;
    font-style: italic;
    color: #000;
}

footer .col-lg-6,
footer .col-lg-6 a {
    color: #bbb;
}

footer .col-lg-6 {
    justify-content: center;
}

footer .col-lg-3:last-child {
    justify-content: flex-end;
}

footer .fa {
    font-size: 20px;
    padding-left: 15px;
}

footer .fa:hover {
    color: #924bd7;
}

footer .fa-instagram {
    font-weight: 700;
}

/* Large devices (desktops, less than 1200px) */
@media (max-width: 1199.98px) {}

/* Medium devices (tablets, less than 992px) */
@media (max-width: 991.98px) {
    footer .col-12 {
        display: block;
        text-align: center;
        margin: 5px 0px;
    }
    .filter-w {
        text-align: center;
    }
    .circular-chart-c.mid {
        width: 50px;
        font-size: 12px;
    }
    .circular-chart-c .rate {
        font-size: 14px;
    }
    .video-overlay .play ,
    .detail-video .video-overlay .play {
        width: 75px;
        height: 75px;
    }
    .video-overlay .play-now {
        top: calc(50% + 45px);
    }
}

/* Small devices (landscape phones, less than 768px) */
@media (max-width: 767.98px) {
    html {
        font-size: 14px;
    }
    /* Menu */
    .nav-right-btn {
        padding: 0px 5px;
    }
    /* Login */
    .login .btns-w {
        text-align: center;
    }
    .login .btns-w button {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .login .forgot-password {
        text-align: center;
    }
    /* Video single page */
    .detail-video .video-rating {
        text-align: center;
        margin-bottom: 15px;
        padding: 0;
    }
    .after:after {
        display: none;
    }
    .profile-top {
        display: block;
        padding: 30px 0 0 0;
    }
    .profile-top li {
        padding: 10px 45px;
    }
    .profile-top li:after {
        top: auto;
        bottom: 0; 
        right: 0;
        height: 1.5px;
        width: 100%;
        transform: none;
    }
    .profile-top .social-media i {
        position: relative;
        top: auto;
        transform: none;
        vertical-align: unset;
    }
    .links {
        font-size: 14px;
    }
    /* About us and contact us pages */
    .cover {
        height: 300px;
    }

    .video-overlay .play ,
    .detail-video .video-overlay .play {
        width: 50px;
        height: 50px;
    }
    .video-overlay .play-now {
        top: calc(50% + 35px);
    }
    .ratings {
        text-align: center;
        padding-bottom: 15px;
    }
    
    
}

/* Extra small devices (portrait phones, less than 576px) */
@media (max-width: 576px) {
    .circular-chart-c {
        width: 65px;
    }
    .his {
        font-size: 65px;
    }
    .circular-chart-w {
        margin: 0px;
    }
    .circular-chart-c.mid {
        width: 40px;
    }
    .circular-chart-c.mid p {
        margin: 0px;
        margin-top: -10px;
    }
    .video-overlay .play ,
    .detail-video .video-overlay .play {
        width: 40px;
        height: 40px;
    }
    .full-screen {
        width: 20px;
        height: 20px;
    }
    .view-eye {
        font-size: 14px;
    }
    .viewers-position {
        font-size: 14px;
    }
    .viewers-position .fa {
        position: relative;
        top: 2px;
    }
    .notifications {
        right: 0px;
        width: 100%;
    }
}

@media (max-width: 340px) {
    html {
        font-size: 13px;
    }
}
    </style>
    </head>
    