<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Kia Tunning</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    a {
        color: white;
        text-decoration: none;
    }
    #loading {
        display: none;
        font-size: 20px;
        text-align: center;
        color: blue;
    }
</style>
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
        <div class="active">
            <a href="/">صفحه اصلی</a>
        </div>
        <div onclick="showOrder()" style="cursor: pointer">سفارشات</div>
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
        <button class="discover">انتخاب</button>
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
        <button class="discover">انتخاب</button>
    </a>
</div>

<div class="pagination" id="pagination">
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
    <div style="z-index: 152;width: 95%; margin-top: 50px;color: white;position: relative">
        <table style="width: 100%; padding: 25px; color: white;">
            <tr>
                <td style="width: 50%; text-align: right;">
                    <img width="35%" src="https://dieselcomponentsinc.com/wp-content/uploads/2023/06/Can-Turbo-Failure-Cause-Engine-Damage.webp">
                </td>
                <td style="text-align: right; width: 50%">
                    <img width="40%" src="https://king-sport.ir/wp-content/uploads/2022/10/%D8%B1%D9%85-%D8%A7%DB%8C%D8%B1-206-%D9%88-207-%D9%85%D8%AE%D8%B5%D9%88%D8%B5-%D9%85%D9%88%D8%AA%D9%88%D8%B1-tu5.jpg">
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <label class="container">توربو
                        <input type="radio" id="radio1" onchange="toggleCheckboxes()" name="group">
                        <span class="checkmark"></span>
                    </label>
                </td>
                <td style="text-align: right">
                    <label class="container">اتمسفر (تنفس طبیعی)
                        <input type="radio" id="radio2" onchange="toggleCheckboxes()" name="group">
                        <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox1" id="checkbox1_1" onchange="updateDetils(130, 90, 5, 70, 41300000,this)" />
                        <label style="padding-left: 10px; direction: rtl;text-align: right">سوپر شارژر</label>
                    </div>
                </td>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox2" id="checkbox2_1" onchange="updateDetils(12, 8, 2, 30, 17700000,this)" />
                        <label style="padding-left: 10px">هدرز 4-2-1</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox1" id="checkbox1_2" onchange="updateDetils(8, 5, 1, 20, 12100000,this)" />
                        <label style="padding-left: 10px">اینترکولر</label>
                    </div>
                </td>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox2" id="checkbox2_2" onchange="updateDetils(5, 3, 1, 5, 3600000,this)" />
                        <label style="padding-left: 10px">رم ایر</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox1" id="checkbox1_3" onchange="updateDetils(12, 10, 3, 20, 34000000,this)" />
                        <label style="padding-left: 10px; direction: rtl;text-align: right">وست گیت</label>
                    </div>
                </td>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox2" id="checkbox2_3" onchange="updateDetils(3, 3, 1, 15, 7600000,this)" />
                        <label style="padding-left: 10px">منبع اگزوز</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox1" id="checkbox1_4" onchange="updateDetils(180, 50, 4, 60, 41300000,this)" />
                        <label style="padding-left: 10px">تویین توربو</label>
                    </div>
                </td>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox2" id="checkbox2_4" onchange="updateDetils(18, 14, 2, 20, 41000000,this)" />
                        <label style="padding-left: 10px">تراتل</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    <div class="checkbox-label">
                        <input type="checkbox" class="checkbox checkbox1" id="checkbox1_5" onchange="updateDetils(5, 3, 1, 10, 10400000,this)" />
                        <label style="padding-left: 10px; direction: rtl;text-align: right">منبع اگزوز</label>
                    </div>
                </td>
                <td style="text-align: right">
                </td>
            </tr>
        </table>
    </div>
    <div class="vehicle" style="">
        <img width="100%" style="border-radius: 18px; margin: auto;position: relative; display: block;" id="cardetail_pic"/>
        <div id="loading">در حال بارگذاری...</div>
        <table style="width: 100%; color: white; z-index: 156; padding: 20px; direction: rtl">
            <tr style="text-align: right">
                <td>نام خودرو:</td>
                <td id="car-name">---</td>
            </tr>
            <tr style="text-align: right">
                <td>موتور:</td>
                <td id="car-engine">---</td>
            </tr>
            <tr style="text-align: right">
                <td>حجم موتور:</td>
                <td id="car-engine-size">---</td>
            </tr>
            <tr style="text-align: right">
                <td>گیربکس:</td>
                <td id="car-gear">---</td>
            </tr>
            <tr style="text-align: right">
                <td>قدرت اسب بخار:</td>
                <td id="car-hp">---</td>
            </tr>
            <tr style="text-align: right">
                <td>گشتاور:</td>
                <td id="car-torque">---</td>
            </tr>
            <tr style="text-align: right">
                <td>شتاب:</td>
                <td id="car-accelerate">---</td>
            </tr>
            <tr style="text-align: right">
                <td>سرعت:</td>
                <td id="car-top-speed">---</td>
            </tr>
        </table>
    </div>
    <div class="submitOrder" style="">

        تومان
        <table style="width: 100%; color: black; z-index: 156; padding: 20px; direction: rtl">
            <tr style="text-align: right">
                <td style="font-size: 17px">
                    مجموع پرداختی شما :
                    <span id="price">0</span> تومان
                </td>
            </tr>
            <tr style="text-align: right">
                <td style="width:30%">
                    جهت ثبت سفارش شماره تماس خود را وارد کنید
                </td>
                <td style="width:20%;padding-left: 40px">
                    <input id="contact-number" style="width: 100%" type="text" minlength="10" maxlength="11" placeholder="شماره موبایل"/>
                </td>
                {{ csrf_token() }}
                <td style="width:15%">
                    <button class="button button1" style="width: 100%" onclick="submitOrder()">ثبت سفارش</button>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="orders" id="orders2">
    <div onclick="hideOrder()"
         style="position: absolute; right: 10px; top: 10px; z-index: 150; border-radius: 100px; background-color: rgba(108,108,108,0.45); padding-top: 8px; padding-bottom: 5px; padding-right: 15px; padding-left: 15px; cursor: pointer">
        <div style="color: white">X</div>
    </div>
    <div style="z-index: 152; width: 95%; margin-top: 50px; color: white; position: relative">
        <div style="float: right">
            <button class="button2 button22" onclick="fetchOrders()">دریافت سفارشات</button>
            <input type="text" id="phone" placeholder="شماره تلفن خود را وارد کنید"/>
        </div>
        <table id="ordersTable" style="width: 100%; padding: 25px; color: white; direction: rtl; text-align: right">
            <thead>
            <tr>
                <th>شماره سفارش</th>
                <th>خودرو</th>
                <th>مبلغ سفارش</th>
                <th>وضعیت</th>
                <th>تاریخ سفارش</th>
            </tr>
            </thead>
            <tbody>
            <!-- اطلاعات سفارش ها در این قسمت نمایش داده می شود -->
            </tbody>
        </table>
    </div>
</div>

</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    // let baseHorsepower = carHp;
    // let currentHorsepower = baseHorsepower;
    let additionalHorsepower = 0;
    let additionalTorque = 0;
    let changeAccelerate = 0;
    let additionalSpeed = 0;
    let price = 0;

    function updateDetils(additionalHp, additionalTq, changeAcc, additionalSpd, pr, checkbox) {
        if (checkbox.checked) {
            additionalHorsepower += additionalHp;
            additionalTorque += additionalTq;
            changeAccelerate -= changeAcc;
            additionalSpeed += additionalSpd;
            price += pr;
        } else {
            additionalHorsepower -= additionalHp;
            additionalTorque -= additionalTq;
            changeAccelerate += changeAcc;
            additionalSpeed -= additionalSpd;
            price -= pr;
        }
        updateDisplay();
    }

    function updateDisplay() {
        var ahp = carHp + additionalHorsepower;
        ahp += " اسب بخار ";
        ahp += "<span style='color:green'>(";
        ahp += additionalHorsepower;
        ahp += "+)</span>";
        document.getElementById('car-hp').innerHTML = ahp;
        var nbm = carTorque + additionalTorque;
        nbm += " نیوتن متر ";
        nbm += "<span style='color:green'>(";
        nbm += additionalTorque;
        nbm += "+)</span>";
        document.getElementById('car-torque').innerHTML = nbm;
        var ca = carAccelerate + changeAccelerate;
        ca += " ثانیه ";
        ca += "<span style='color:green'>(";
        ca += changeAccelerate;
        ca += ")</span>";
        document.getElementById('car-accelerate').innerHTML = ca;
        var tsp = carTopSpeed + additionalSpeed;
        tsp += " کیلومتر در ساعت ";
        tsp += "<span style='color:green'>(";
        tsp += additionalSpeed;
        tsp += "+)</span>";
        document.getElementById('car-top-speed').innerHTML = tsp;
        document.getElementById('price').innerHTML = formatPrice(price);
    }
    const checkboxes1 = document.querySelectorAll('.checkbox1');
    const checkboxes2 = document.querySelectorAll('.checkbox2');
    checkboxes1.forEach(checkbox => checkbox.disabled = true);
    checkboxes2.forEach(checkbox => checkbox.disabled = true);
    function formatPrice(price) {
        let priceString = price.toString();
        let result = '';
        let counter = 0;

        for (let i = priceString.length - 1; i >= 0; i--) {
            result = priceString[i] + result;
            counter++;
            if (counter % 3 === 0 && i !== 0) {
                result = ',' + result;
            }
        }
        return result;
    }

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
        additionalHorsepower = 0;
        additionalTorque = 0;
        changeAccelerate = 0;
        additionalSpeed = 0;
        price = 0;
        updateDisplay();
    }

    function resetCheckboxes() {
        const checkboxes1 = document.querySelectorAll('.checkbox1');
        const checkboxes2 = document.querySelectorAll('.checkbox2');
        checkboxes1.forEach(checkbox => {
            checkbox.checked = false;
            additionalHorsepower = 0;
            additionalTorque = 0;
            changeAccelerate = 0;
            additionalSpeed = 0;
            price = 0;
        });
        checkboxes2.forEach(checkbox => {
            checkbox.checked = false;
            additionalHorsepower = 0;
            additionalTorque = 0;
            changeAccelerate = 0;
            additionalSpeed = 0;
            price = 0;
        });
    }
</script>
<script>
    function submitOrder() {
        if(price == 0) {
            alert("هنوز ماشینت فابریکه");
            return;
        }
        const xhttp = new XMLHttpRequest();
        const contactNumber = document.getElementById('contact-number').value;
        const selectedOptions = [];
        const checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedOptions.push(checkbox.id);
            }
        });
        xhttp.onload = function() {
            document.getElementById("loading").style.display = "none";
            if (this.status == 200) {
                const resp = JSON.parse(this.responseText);
                if (resp.status == true) {
                    alert(resp.message);
                    resetCheckboxes();
                    hide('popup2');
                }
            } else {
                console.error("خطا در ثبت سفارش");
                resetCheckboxes();
                hide('popup2');
            }
        };
        const data = {
            id: document.getElementById("iddata").value,
            contact: contactNumber,
            amount: price,
            options: selectedOptions,
            _token: '{{ csrf_token() }}'
        };
        xhttp.open("POST", "submit-order", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(JSON.stringify(data));
    }
</script>
<script>
    function fetchOrders() {
        var phone = document.getElementById('phone').value;

        if (phone === '') {
            alert('لطفاً شماره تلفن را وارد کنید.');
            return;
        }

        fetch('orders/' + phone)
            .then(response => response.json())
            .then(data => {
                var tableBody = document.getElementById('ordersTable').getElementsByTagName('tbody')[0];
                tableBody.innerHTML = '';
                data.orders.forEach(order => {
                    var row = tableBody.insertRow();
                    row.insertCell(0).innerText = order.id;
                    row.insertCell(1).innerText = order.car.name;
                    row.insertCell(2).innerText = order.amount + " تومان";
                    let ostatus = "";
                    if(order.status==false) {
                        ostatus += "<span style='color:lightcoral;'>";
                        ostatus += "در انتظار بررسی";
                        ostatus += "</span>";
                    } else {
                        ostatus += "<span style='color:lightgreen;'>";
                        ostatus += "تکمیل شده";
                        ostatus += "</span>";
                    }
                    row.insertCell(3).innerHTML = ostatus;
                    row.insertCell(4).innerText = order.created_at;
                });
            })
            .catch(error => console.error('Error:', error));
    }
</script>
</body>
</html>
