<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Kia Tunning</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<body>
<div class="indicator"></div>
<nav>
    <div>
        <div class="svg-container">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"
                />
            </svg>
        </div>
        <div>Mohammad Kia</div>
    </div>
    <div>
        <div class="active">Home</div>
        <div>About</div>
        <div>Contact</div>
    </div>
</nav>

<div id="demo"></div>

<div class="details" id="details-even">
    <input type="hidden" class="img-bg" id="img-bg"
           value="https://cdn.asriran.com/files/fa/news/1403/7/17/1970202_674.jpg"/>
    <input type="hidden" class="iddata" id="iddata" value="1"/>
    <div class="place-box">
        <div class="text">Saipa Corp</div>
    </div>
    <div class="title-box-1">
        <div class="title-1">Pride</div>
    </div>
    <div class="title-box-2">
        <div class="title-2">Hatchback</div>
    </div>
    <div class="desc">
        The Pride 132, also known as the Saba, is a compact hatchback produced in Iran, primarily by the Iran Khodro
        Company. It’s an evolution of the original Pride model, known for its straightforward and practical design.
    </div>
    <a class="cta" onclick="show('popup2')" data-toggle="modal" data-target=".bd-example-modal-lg">
        <button class="discover">Let's Tune</button>
    </a>
</div>

<div class="details" id="details-odd">
    <input type="hidden" class="img-bg" id="img-bg" value=""/>
    <input type="hidden" class="iddata" id="iddata" value=""/>
    <div class="place-box">
        <div class="text"></div>
    </div>
    <div class="title-box-1">
        <div class="title-1"></div>
    </div>
    <div class="title-box-2">
        <div class="title-2"></div>
    </div>
    <div class="desc">
    </div>
    <a class="cta" onclick="show('popup2')" data-toggle="modal" data-target=".bd-example-modal-lg">
        <button class="discover">Let's Tune</button>
    </a>
</div>

<div class="pagination" id="pagination">
    {{--    <div class="arrow arrow-left">--}}
    {{--        <svg--}}
    {{--            xmlns="http://www.w3.org/2000/svg"--}}
    {{--            fill="none"--}}
    {{--            viewBox="0 0 24 24"--}}
    {{--            stroke="currentColor"--}}
    {{--        >--}}
    {{--            <path--}}
    {{--                stroke-linecap="round"--}}
    {{--                stroke-linejoin="round"--}}
    {{--                d="M15.75 19.5L8.25 12l7.5-7.5"--}}
    {{--            />--}}
    {{--        </svg>--}}
    {{--    </div>--}}
    <div class="arrow arrow-right" style="cursor: pointer" onclick="step()">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5"
            />
        </svg>
    </div>
    <div class="progress-sub-container">
        <div class="progress-sub-background">
            <div class="progress-sub-foreground"></div>
        </div>
    </div>
    <div class="slide-numbers" id="slide-numbers"></div>
</div>

<div class="cover"></div>

<div class="popup" id="popup2">
    <div onclick="hide('popup2')"
         style="position: absolute; right: 10px; top: 10px; z-index: 150; border-radius: 100px; background-color: rgba(108,108,108,0.45); padding-top: 8px; padding-bottom: 5px; padding-right: 15px; padding-left: 15px; cursor: pointer">
        <div style="color: white">X</div>
    </div>
    <div style="z-index: 152;width: 95%; margin-top: 50px;color: #1a1a1a;position: relative">
        <table style="width: 100%;z-index: 153; padding: 25px;color: black">
            <tr>
                <td style="width: 50%;text-align: right;">
                    <img width="35%"
                         src="https://dieselcomponentsinc.com/wp-content/uploads/2023/06/Can-Turbo-Failure-Cause-Engine-Damage.webp">
                    <br>
                    </span>
                </td>
                <td style="text-align: right; width: 50%">
                    <img width="40%"
                         src="https://king-sport.ir/wp-content/uploads/2022/10/%D8%B1%D9%85-%D8%A7%DB%8C%D8%B1-206-%D9%88-207-%D9%85%D8%AE%D8%B5%D9%88%D8%B5-%D9%85%D9%88%D8%AA%D9%88%D8%B1-tu5.jpg">
                    <br>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="direction: rtl; text-align: right">
                    <label class="container">توربو
                        <input type="radio" id="radio1" onchange="toggleCheckboxes()" name="group">
                        <span class="checkmark"></span>
                    </label>
                </td>
                <td style="direction: rtl; text-align: right">
                    <label class="container">اتمسفر (تنفس طبیعی)
                        <input type="radio" id="radio2" onchange="toggleCheckboxes()" name="group">
                        <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox1"/>
                        <label style="padding-left: 20px">
                            وست گیت
                        </label>
                        <font color="green">12+</font>
                    </div>
                </td>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox2"/>
                        <label style="padding-left: 20px">
                            هدرز 4-2-1
                        </label>
                        <font color="green">12+</font>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox1"/>
                        <label style="padding-left: 20px">
                            اینترکولر
                        </label>
                        <font color="green">8+</font>
                    </div>
                </td>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox2"/>
                        <label style="padding-left: 20px">
                            رم ایر
                        </label>
                        <font color="green">5+</font>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox1"/>
                        <label style="padding-left: 20px">
                            منبع اگزوز
                        </label>
                        <font color="green">5+</font>
                    </div>
                </td>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox2"/>
                        <label style="padding-left: 20px">
                            منبع اگزوز
                        </label>
                        <font color="green">3+</font>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox1"/>
                        <label style="padding-left: 20px">
                            دوئل توربو
                        </label>
                        <font color="green">180+</font>
                    </div>
                </td>
                <td style="text-align: right">
                    <div style="direction: rtl; text-align: right">
                        <input type="checkbox" class="checkbox2"/>
                        <label style="padding-left: 20px">
                            تراتل
                        </label>
                        <font color="green">18+</font>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="vehicle" style="">
        <img width="96%" style="border-radius: 18px; margin: auto; padding: 10px; position: relative; display: block;" id="cardetail_pic"/>
        <table style="width: 100%; color: black; z-index: 156; padding: 20px; direction: rtl">
            <tr style="text-align: right">
                <td>
                    نام خودرو :
                </td>
                <td>پراید</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    رنگ خودرو :
                </td>
                <td>مشکی ماشین</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    موتور :
                </td>
                <td>4 سیلندر توربوشارژ مولتی‌ایر</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    حجم موتور :
                </td>
                <td>1.4 لیتر</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    گیربکس :
                </td>
                <td>6 سرعته اتومات</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    قدرت اسب بخار :
                </td>
                <td>90hp</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    گشتاور :
                </td>
                <td>90 نیوتن متر</td>
            </tr>
            <tr style="text-align: right">
                <td>
                    شتاب :
                </td>
                <td>3 ثانیه</td>
            </tr>
            <tr style="text-align: right">
                <td>
                     سرعت
                </td>
                <td>320 کیلومتر برساعت</td>
            </tr>
        </table>
    </div>
    <div class="submitOrder" style="">
        <table style="width: 100%; color: black; z-index: 156; padding: 20px; direction: rtl">
            <tr style="text-align: right">
                <td style="width:30%">
                    جهت ثبت سفارش شماره تماس خود را وارد کنید
                </td>
                <td style="width:20%;padding-left: 40px">
                    <input style="width: 100%" type="text" minlength="10" maxlength="11" placeholder="شماره موبایل"/>
                </td>
                <td style="width:15%">
                    <button class="button button1" style="width: 100%">ثبت سفارش</button>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    const checkboxes1 = document.querySelectorAll('.checkbox1');
    const checkboxes2 = document.querySelectorAll('.checkbox2');
    checkboxes1.forEach(checkbox => checkbox.disabled = true);
    checkboxes2.forEach(checkbox => checkbox.disabled = true);

    function toggleCheckboxes() {
        const radio1 = document.getElementById('radio1');

        if (radio1.checked) {
            checkboxes1.forEach(checkbox => checkbox.disabled = false);
            checkboxes2.forEach(checkbox => checkbox.disabled = true);
            checkboxes2.forEach(checkbox => checkbox.checked = false);
        } else {
            checkboxes1.forEach(checkbox => checkbox.disabled = true);
            checkboxes2.forEach(checkbox => checkbox.disabled = false);
            checkboxes1.forEach(checkbox => checkbox.checked = false);
        }
    }
</script>
</body>
</html>
