<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice </title>

</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    :root {
        --primary-font: "Jost", sans-serif;
        --secondary-font: "Roboto", sans-serif;
        --tertiary-font: "Poppins", sans-serif;
        --lato-font: 'Lato', sans-serif;
    }

    .primary-font {
        font-family: var(--primary-font);
    }

    .secondary-font {
        font-family: var(--secondary-font);
    }

    .tertiary-font {
        font-family: var(--tertiary-font);
    }

    .lato-font {
        font-family: var(--lato-font);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: none;
        outline: none;
        text-decoration: none;
        list-style: none;
        overflow-x: hidden;
        position: relative;
        user-select: none;
        letter-spacing: 0.3px;
        font-family: var(--primary-font);
    }

    a:hover {
        text-decoration: none;
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .d-flex {
        display: flex;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .align-items-center {
        align-items: center;
    }

    .justify-content {
        justify-content: center;
    }

    .justify-content-between {
        justify-content: space-between;
    }

    .gap-1 {
        gap: 5px;
    }

    .gap-2 {
        gap: 10px;
    }

    .gap-3 {
        gap: 15px;
    }

    .gap-4 {
        gap: 20px;
    }

    .height-100vh {
        height: 100vh;
    }

    .w-100 {
        width: 100%;
    }

    /* padding  */
    .p-1 {
        padding: 5px;
    }

    .p-2 {
        padding: 10px;
    }

    .p-3 {
        padding: 15px;
    }

    .p-4 {
        padding: 20px;
    }

    .p-5 {
        padding: 25px !important;
    }

    .pt-1 {
        padding-top: 5px !important;
    }

    .pt-2 {
        padding-top: 10px !important;
    }

    .pt-3 {
        padding-top: 15px !important;
    }

    .pt-4 {
        padding-top: 20px !important;
    }

    .pt-5 {
        padding-top: 25px !important;
    }

    .pb-1 {
        padding-bottom: 5px !important;
    }

    .pb-2 {
        padding-bottom: 10px !important;
    }

    .pb-3 {
        padding-bottom: 15px !important;
    }

    .pb-4 {
        padding-bottom: 20px !important;
    }

    .pb-5 {
        padding-bottom: 25px !important;
    }

    .ps-1 {
        padding-left: 5px;
    }

    .ps-2 {
        padding-left: 10px;
    }

    .ps-3 {
        padding-left: 15px;
    }

    .ps-4 {
        padding-left: 20px;
    }

    .pe-1 {
        padding-right: 5px;
    }

    .pe-2 {
        padding-right: 10px;
    }

    .pe-3 {
        padding-right: 15px;
    }

    .pe-4 {
        padding-right: 20px;
    }

    /* padding  */
    /* margin  */
    .m-1 {
        margin: 5px;
    }

    .m-2 {
        margin: 10px;
    }

    .m-3 {
        margin: 15px;
    }

    .m-4 {
        margin: 20px;
    }

    .m-5 {
        margin: 25px;
    }

    .mt-1 {
        margin-top: 5px;
    }

    .mt-2 {
        margin-top: 10px;
    }

    .mt-3 {
        margin-top: 15px;
    }

    .mt-4 {
        margin-top: 20px;
    }

    .mb-1 {
        margin-bottom: 5px;
    }

    .mb-2 {
        margin-bottom: 10px;
    }

    .mb-3 {
        margin-bottom: 15px;
    }

    .mb-4 {
        margin-bottom: 20px;
    }

    .mb-5 {
        margin-bottom: 30px;
    }

    .ms-1 {
        margin-left: 5px;
    }

    .ms-2 {
        margin-left: 10px;
    }

    .ms-3 {
        margin-left: 15px;
    }

    .ms-4 {
        margin-left: 20px;
    }

    .me-1 {
        margin-right: 5px;
    }

    .me-2 {
        margin-right: 10px;
    }

    .me-3 {
        margin-right: 15px;
    }

    .me-4 {
        margin-right: 20px;
    }

    /* margin  */
    /* color  */
    .primary-color {
        color: #26ae60;
    }

    .text-white {
        color: #fff;
    }

    .text-dark {
        color: #000 !important;
    }

    .text-color-1 {
        color: #4F4F4F !important;
    }

    .text-color {
        color: #333 !important;
    }

    /* color  */
    /* bg color  */
    .bg-primary {
        background: #26ae60;
    }

    .bg-secondary {
        background-color: #e9f7ef !important;
    }

    /* bg color  */
    /* border  */
    .border {
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
    }

    /* .border-1 {
        border: #333;
    }

    .border {
        border: #333;
    }

    .border {
        border: #333;
    } */

    /* border  */
    .text-uppercase {
        text-transform: uppercase;
    }

    .text-capitalize {
        text-transform: capitalize;
    }

    /* grid  */
    .rounded-1 {
        border-radius: 5px;
    }

    .rounded-2 {
        border-radius: 10px;
    }

    .rounded-3 {
        border-radius: 20px;
    }

    .rounded-4 {
        border-radius: 30px;
    }

    .rounded-5 {
        border-radius: 40px;
    }

    .rounded-50 {
        border-radius: 50%;
    }

    .rounded-circle {
        border-radius: 100%;
    }

    /* grid  */

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th {
        font-size: 15px;
        font-weight: 500;
        font-family: var(--tertiary-font);
        color: #fff;
        background: #26ae60;
        padding: 8px;
        border: 1px solid #fff !important;
    }

    td {
        border: 1px solid #dddddd !important;
        text-align: left;
        padding: 8px;
    }

    caption {
        text-align: start;
        font-weight: 500;
        font-size: 18px;
        margin: 10px 0px;
    }

    /* ====================================================== */

    .invoice-section {
        padding: 70px 0px;
    }

    .invoice-section .container {
        width: 65%;
    }

    /* row 1  */
    .invoice-section .container .row-1 {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .invoice-section .container .row-1 .columns-1 {
        width: 24%;
    }

    .invoice-section .container .row-1 .columns-2,
    .columns-3 {
        width: 35%;
    }

    .invoice-section .container .row-1 .columns-3 {
        text-align: end;
    }

    .invoice-section .container .row-1 h2 {
        font-size: 40px;
        font-weight: 400;
    }

    .invoice-section .container .row-1 .columns-2 p {
        font-size: 17px;
        font-weight: 500;
        margin: 10px 0px;
    }

    .invoice-section .container .row-1 .columns-2 span {
        font-size: 14px;
        font-weight: 400;
    }

    .invoice-section .container .row-1 .columns-3 img {
        width: 70%;
        height: auto;
    }

    /* row 1  */
    /* row 5  */
    .invoice-section .container .row-5 .ul-1 p {
        font-size: 15px;
        color: #212529;
        font-weight: 400;

    }

    .invoice-section .container .row-5 b {
        font-size: 19px;
        margin: 15px 0px 10px 0px;
        display: block;
        font-weight: 500;
    }

    .invoice-section .container .row-5 .ul-2 p {
        font-size: 17px;
        font-weight: 300;
    }

    /* row 5  */
    /* row 3  */
    .invoice-section .container .row-4 .column-1 {
        width: 60%;
    }

    .invoice-section .container .row-4 .column-2 {
        width: 38%;
    }

    .invoice-section .container .row-4 .column-1 p {
        font-size: 20px;
        font-weight: 400;
    }

    .invoice-section .container .row-4 .column-1 span {
        font-size: 22px;
        font-weight: 400;
    }

    .invoice-section .container .row-2 .column-1,
    .column-2 {
        width: 49%;
    }

    /* row 3  */
    @media screen and (max-width:1024px) {
        .invoice-section .container {
            width: 90%;
        }

    }

    @media screen and (max-width:780px) {

        .invoice-section .container .row-2 .column-1,
        .column-2 {
            width: 100%;
            margin: 10px 0px;
        }

        .invoice-section .container .row-1 .columns-1 {
            width: 30%;
        }

        .invoice-section .container .row-1 .columns-2 {
            width: 65%;
        }

        .invoice-section .container .row-1 .columns-3 {
            display: none;
        }
    }

    @media screen and (max-width:600px) {
        .invoice-section .container .row-4 .column-1 {
            width: 49%;
        }

        .invoice-section .container .row-4 .column-2 {
            width: 49%;
        }

        .invoice-section .container .row-1 .columns-3 {
            width: 25%;
        }

        .invoice-section .container .row-1 .columns-2 {
            width: 45%;
        }
    }

    @media screen and (max-width:550px) {
        .invoice-section .container .row-4 .column-1 {
            width: 100% !important;
        }

        .invoice-section .container .row-4 .column-2 {
            width: 100% !important;
        }
       
    }
</style>

<body>
    <section class="center invoice-section">
        <div class="container">
            <div class="card bg-secondary row-1 justify-content-between d-flex  pt-4 pb-4 mb-5 rounded-1">
                <div class="columns-1">
                    <h2 class="primary-color primary-font">TAX <br> Invoice</h2>
                </div>
                <div class="columns-2">
                    <p class="secondary-font">Manoeuvre Education Pvt. Ltd.</p>
                    <span class="secondary-font text-color">
                        2nd Floor, Mahavir Kunj, Station Road,
                        Opposite Police Station, Above Raymond
                        Showroom, Anand Nagar, Vasai (w)
                        Maharashtra, India -401202

                    </span>
                </div>
                <div class="columns-3">
                    <img src="./assets/img/Hedaer/Group.png" alt="">
                </div>
            </div>
            <div class="card row-2 justify-content-between flex-wrap d-flex justify-content-center w-100 mb-5">
                <div class="column-2" style="overflow-x: auto;">
                    <table>
                        <caption class="primary-color secondary-font">Billed By</caption>
                        <tr>
                            <th class="bg-secondary text-color border "> GSTIN </th>
                            <td> 27AAOCM1872F1Z8 </td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">CIN</th>
                            <td> U80900MH2021PTC353020</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">PAN</th>
                            <td> AdAOCM1872F</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">Email</th>
                            <td> manoeuvre.helpdesk@gmail.com</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">Phone</th>
                            <td> +91 8857-945882</td>
                        </tr>
                    </table>
                </div>
                <div class="column-2" style="overflow-x: auto;">
                    <table>
                        <caption class="primary-color secondary-font">Billed To</caption>
                        <tr>
                            <th class="bg-secondary text-color border "> Name </th>
                            <td> Aditya </td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">Email</th>
                            <td> manoeuvre.helpdesk@gmail.com</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">PAN</th>
                            <td> AdAOCM1872F</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">Place </th>
                            <td> MH, Thane, 400601</td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">Phone</th>
                            <td> +91 8857-945882</td>
                        </tr>
                    </table>
                </div>
                <div class="column-1" style="overflow-x: auto;">
                    <table>
                        <caption class="primary-color secondary-font">Invoice Details</caption>
                        <tr>
                            <th class="bg-secondary text-color border "> Invoice No: </th>
                            <td> Invoice Date: </td>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-color border ">MANO23240004461</th>
                            <td> November 27, 2023</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="card mb-5 row-2">
                <div class="" style="overflow-x: auto;">
                    <table>
                        <tr>
                            <th>DESCRIPTION</th>
                            <th>QUANTITY</th>
                            <th>SAC</th>
                            <th>GST</th>
                            <th>PRICE</th>
                            <th>TOTAL</th>
                        </tr>
                        <tr>
                            <td>
                                <ul class="d-flex gap-2 flex-wrap align-items-center ">
                                    <li>1 <span>.</span></li>
                                    <li>MBA CET 2024 - SELF STUDY TURBO PROGRAM</li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>999293</td>
                            <td>18%</td>
                            <td>Rs.4660.17</td>
                            <td>Rs.4660.17%</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="d-flex gap-2 flex-wrap align-items-center ">
                                    <li>2 <span>.</span></li>
                                    <li>MBA CET 2024 - SELF STUDY TURBO PROGRAM</li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>999293</td>
                            <td>18%</td>
                            <td>Rs.4660.17</td>
                            <td>Rs.4660.17%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card row-4 justify-content-between  d-flex justify-content-center w-100 pt-4 pb-4 mb-5 rounded-1">
                <div class="column-1">
                    <p class="secondary-font mb-2">Total in words:</p>
                    <span class="primary-color secondary-font text-uppercase">SIX THOUSAND SEVEN HUNDRED AND NINETY EIGHT
                        RUPEES ONLY</span>
                </div>
                <div class="column-2">
                    <div class="card p-4 border rounded-1">
                        <ul>
                            <li class="d-flex mb-4 justify-content-between align-items-center flex-wrap">
                                <p class="secondary-font">Amount</p>
                                <p class="secondary-font"> Rs.5761.02</p>
                            </li>
                            <li class="d-flex mb-4 justify-content-between align-items-center flex-wrap">
                                <p class="secondary-font">SGST </p>
                                <p class="secondary-font"> Rs.5761.02</p>
                            </li>
                            <li class="d-flex mb-4 justify-content-between align-items-center flex-wrap">
                                <p class="secondary-font">CGST </p>
                                <p class="secondary-font"> Rs.5761.02</p>
                            </li>
                            <li class="d-flex  justify-content-between align-items-center flex-wrap">
                                <p class="secondary-font">Total</p>
                                <p class="secondary-font primary-color"> Rs.6,798.00</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card bg-secondary row-5  p-5 mb-5 rounded-1">
                <ul class="ul-1 gap-3 d-flex flex-wrap align-items-center ">
                    <li>
                        <p class="secondary-font text-uppercase text-color-1">Bank Details, </p>
                    </li>
                    <li>
                        <p class="secondary-font text-uppercase text-color-1"> Bank Name: - HDFC BANK, </p>
                    </li>
                    <li>
                        <p class="secondary-font text-uppercase text-color-1"> Account No: - 50200054290947, </p>
                    </li>
                    <li>
                        <p class="secondary-font text-uppercase text-color-1"> Bank Name: - HDFC BANK, </p>
                    </li>
                </ul>
                <b class="text-color-1  secondary-font">Terms & Conditions</b>
                <ul class="ul-2">
                    <li class="mt-3 mb-3">
                        <p>
                            1. Fees are strictly non-refundable and non-transferable. / The fees once paid will not be refunded under any circumstances.
                        </p>
                    </li>
                    <li class="mt-3 mb-3">
                        <p>
                            2. You can remit your fees through electronic transfer, cheque in favour of "Manoeuvre Education Pvt Ltd” & cash at any of our branch offices.
                        </p>
                    </li>
                    <li class="mt-3 mb-3">
                        <p>
                            3. If any cheque is bounced for whatsoever reason, a fine of Rs. 1000 will be charged additionally.
                        </p>
                    </li>
                    <li class="mt-3 mb-3">
                        <p>
                            4. Any Change of Address, Mobile Number &amp; Email Should be notified in writing immediately to the institute
                        </p>
                    </li>
                    <li class="mt-3 mb-3">
                        <p>
                            5. Manoeuvre reserves its rights to make any alteration in its course/ venue/ timing and days of classes without any prior notice to anybody. The
                            decision of the institute will be final and binding on the students and the parents.
                        </p>
                    </li>
                    <li class="mt-3 mb-3">
                        <p>
                            6. Disputes, if any, are subject to "Palghar" Jurisdiction only.
                        </p>
                    </li>

                </ul>
            </div>
        </div>
    </section>


</body>

</html>