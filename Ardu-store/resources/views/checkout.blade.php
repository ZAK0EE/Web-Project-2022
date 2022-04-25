@extends('layout')
@section('content')
    <h3>Check Out</h3>

    <div class="CheckOut">
        @if (Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
        @endif
        <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
            @csrf
            <label for="fname">First Name</label>
            <input type="text" id="first_name" name="first_name" class='checkoutForm' placeholder="Your name..">
            <br><br>

            <label for="lname">Last Name</label>
            <input type="text" id="last_name" name="last_name" class='checkoutForm' placeholder="Your last name..">
            <br><br>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" class='checkoutForm' placeholder="Your address..">
            <br><br>

            <label for="country">Country</label>
            <select id="country" name="country" class='checkoutForm'>
                <option value="EG">Egypt</option>
                <option value="DZ">Algeria</option>
                <option value="AO">Angola</option>
                <option value="BJ">Benin</option>
                <option value="BW">Botswana</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="CM">Cameroon</option>
                <option value="CV">Cape Verde</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, Democratic Republic of the Congo</option>
                <option value="CI">Cote D'Ivoire</option>
                <option value="DJ">Djibouti</option>


            </select>
            <br><br>
            <label for="City">City</label>
            <select id="city" name="city">
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
                <option value="Madīnat as Sādis min Uktūbar">Madīnat as Sādis min Uktūbar</option>
                <option value="Shubrā al Khaymah">Shubrā al Khaymah</option>
                <option value="Al Manşūrah">Al Manşūrah</option>
                <option value="Ḩalwān">Ḩalwān</option>
                <option value="Al Maḩallah al Kubrá">Al Maḩallah al Kubrá</option>
                <option value="Port Said">Port Said</option>
                <option value="Suez">Suez</option>
                <option value="Ţanţā">Ţanţā</option>
                <option value="Asyūţ">Asyūţ</option>
                <option value="Al Fayyūm">Al Fayyūm</option>
                <option value="Az Zaqāzīq">Az Zaqāzīq</option>
                <option value="Ismailia">Ismailia</option>
                <option value="Aswān">Aswān</option>
                <option value="Kafr ad Dawwār">Kafr ad Dawwār</option>
                <option value="Damanhūr">Damanhūr</option>
                <option value="Al Minyā">Al Minyā</option>
                <option value="Damietta">Damietta</option>
                <option value="Luxor">Luxor</option>
                <option value="Qinā">Qinā</option>
                <option value="Sūhāj">Sūhāj</option>
                <option value="Banī Suwayf">Banī Suwayf</option>
                <option value="Shibīn al Kawm">Shibīn al Kawm</option>
                <option value="Al ‘Arīsh">Al ‘Arīsh</option>
                <option value="Al Ghardaqah">Al Ghardaqah</option>
                <option value="Banhā">Banhā</option>
                <option value="Kafr ash Shaykh">Kafr ash Shaykh</option>
                <option value="Disūq">Disūq</option>
                <option value="Bilbays">Bilbays</option>
                <option value="Mallawī">Mallawī</option>
                <option value="Idfū">Idfū</option>
                <option value="Mīt Ghamr">Mīt Ghamr</option>
                <option value="Munūf">Munūf</option>
                <option value="Jirjā">Jirjā</option>
                <option value="Akhmīm">Akhmīm</option>
                <option value="Ziftá">Ziftá</option>
                <option value="Samālūţ">Samālūţ</option>
                <option value="Manfalūţ">Manfalūţ</option>
                <option value="Banī Mazār">Banī Mazār</option>
                <option value="Armant">Armant</option>
                <option value="Maghāghah">Maghāghah</option>
                <option value="Kawm Umbū">Kawm Umbū</option>
                <option value="Būr Fu’ād">Būr Fu’ād</option>
                <option value="Al Qūşīyah">Al Qūşīyah</option>
                <option value="Rosetta">Rosetta</option>
                <option value="Isnā">Isnā</option>
                <option value="Maţrūḩ">Maţrūḩ</option>
                <option value="Abnūb">Abnūb</option>
                <option value="Hihyā">Hihyā</option>
                <option value="Samannūd">Samannūd</option>
                <option value="Dandarah">Dandarah</option>
                <option value="Al Khārjah">Al Khārjah</option>
                <option value="Al Balyanā">Al Balyanā</option>
                <option value="Maţāy">Maţāy</option>
                <option value="Naj‘ Ḩammādī">Naj‘ Ḩammādī</option>
                <option value="Şān al Ḩajar al Qiblīyah">Şān al Ḩajar al Qiblīyah</option>
                <option value="Dayr Mawās">Dayr Mawās</option>
                <option value="Ihnāsyā al Madīnah">Ihnāsyā al Madīnah</option>
                <option value="Darāw">Darāw</option>
                <option value="Abū Qīr">Abū Qīr</option>
                <option value="Fāraskūr">Fāraskūr</option>
                <option value="Ra’s Ghārib">Ra’s Ghārib</option>
                <option value="Al Ḩusaynīyah">Al Ḩusaynīyah</option>
                <option value="Safājā">Safājā</option>
                <option value="Qiman al ‘Arūs">Qiman al ‘Arūs</option>
                <option value="Qahā">Qahā</option>
                <option value="Al Karnak">Al Karnak</option>
                <option value="Hirrīyat Raznah">Hirrīyat Raznah</option>
                <option value="Al Quşayr">Al Quşayr</option>
                <option value="Kafr Shukr">Kafr Shukr</option>
                <option value="Sīwah">Sīwah</option>
                <option value="Kafr Sa‘d">Kafr Sa‘d</option>
                <option value="Shārūnah">Shārūnah</option>
                <option value="Aţ Ţūr">Aţ Ţūr</option>
                <option value="Rafaḩ">Rafaḩ</option>
                <option value="Ash Shaykh Zuwayd">Ash Shaykh Zuwayd</option>
                <option value="Bi’r al ‘Abd">Bi’r al ‘Abd</option>

            </select>
            <br><br>

            <label for="phone_number">Phone Number:</label><br><br>
            <input type="tel" id="phone_number" name="phone_number" placeholder="Your Phone Number" class='checkoutForm'
                pattern="[0-9]{11}" required><br><br>

            <label for="Notes">Notes</label>
            <input type='textarea' id="notes" name="notes" placeholder="Write something.." style="height:150px"
                class='checkoutForm'>

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
