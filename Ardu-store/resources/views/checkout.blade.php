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
                <option value="Mad??nat as S??dis min Ukt??bar">Mad??nat as S??dis min Ukt??bar</option>
                <option value="Shubr?? al Khaymah">Shubr?? al Khaymah</option>
                <option value="Al Man????rah">Al Man????rah</option>
                <option value="???alw??n">???alw??n</option>
                <option value="Al Ma???allah al Kubr??">Al Ma???allah al Kubr??</option>
                <option value="Port Said">Port Said</option>
                <option value="Suez">Suez</option>
                <option value="??an????">??an????</option>
                <option value="Asy????">Asy????</option>
                <option value="Al Fayy??m">Al Fayy??m</option>
                <option value="Az Zaq??z??q">Az Zaq??z??q</option>
                <option value="Ismailia">Ismailia</option>
                <option value="Asw??n">Asw??n</option>
                <option value="Kafr ad Daww??r">Kafr ad Daww??r</option>
                <option value="Damanh??r">Damanh??r</option>
                <option value="Al Miny??">Al Miny??</option>
                <option value="Damietta">Damietta</option>
                <option value="Luxor">Luxor</option>
                <option value="Qin??">Qin??</option>
                <option value="S??h??j">S??h??j</option>
                <option value="Ban?? Suwayf">Ban?? Suwayf</option>
                <option value="Shib??n al Kawm">Shib??n al Kawm</option>
                <option value="Al ???Ar??sh">Al ???Ar??sh</option>
                <option value="Al Ghardaqah">Al Ghardaqah</option>
                <option value="Banh??">Banh??</option>
                <option value="Kafr ash Shaykh">Kafr ash Shaykh</option>
                <option value="Dis??q">Dis??q</option>
                <option value="Bilbays">Bilbays</option>
                <option value="Mallaw??">Mallaw??</option>
                <option value="Idf??">Idf??</option>
                <option value="M??t Ghamr">M??t Ghamr</option>
                <option value="Mun??f">Mun??f</option>
                <option value="Jirj??">Jirj??</option>
                <option value="Akhm??m">Akhm??m</option>
                <option value="Zift??">Zift??</option>
                <option value="Sam??l????">Sam??l????</option>
                <option value="Manfal????">Manfal????</option>
                <option value="Ban?? Maz??r">Ban?? Maz??r</option>
                <option value="Armant">Armant</option>
                <option value="Magh??ghah">Magh??ghah</option>
                <option value="Kawm Umb??">Kawm Umb??</option>
                <option value="B??r Fu?????d">B??r Fu?????d</option>
                <option value="Al Q??????yah">Al Q??????yah</option>
                <option value="Rosetta">Rosetta</option>
                <option value="Isn??">Isn??</option>
                <option value="Ma??r?????">Ma??r?????</option>
                <option value="Abn??b">Abn??b</option>
                <option value="Hihy??">Hihy??</option>
                <option value="Samann??d">Samann??d</option>
                <option value="Dandarah">Dandarah</option>
                <option value="Al Kh??rjah">Al Kh??rjah</option>
                <option value="Al Balyan??">Al Balyan??</option>
                <option value="Ma????y">Ma????y</option>
                <option value="Naj??? ???amm??d??">Naj??? ???amm??d??</option>
                <option value="????n al ???ajar al Qibl??yah">????n al ???ajar al Qibl??yah</option>
                <option value="Dayr Maw??s">Dayr Maw??s</option>
                <option value="Ihn??sy?? al Mad??nah">Ihn??sy?? al Mad??nah</option>
                <option value="Dar??w">Dar??w</option>
                <option value="Ab?? Q??r">Ab?? Q??r</option>
                <option value="F??rask??r">F??rask??r</option>
                <option value="Ra???s Gh??rib">Ra???s Gh??rib</option>
                <option value="Al ???usayn??yah">Al ???usayn??yah</option>
                <option value="Saf??j??">Saf??j??</option>
                <option value="Qiman al ???Ar??s">Qiman al ???Ar??s</option>
                <option value="Qah??">Qah??</option>
                <option value="Al Karnak">Al Karnak</option>
                <option value="Hirr??yat Raznah">Hirr??yat Raznah</option>
                <option value="Al Qu??ayr">Al Qu??ayr</option>
                <option value="Kafr Shukr">Kafr Shukr</option>
                <option value="S??wah">S??wah</option>
                <option value="Kafr Sa???d">Kafr Sa???d</option>
                <option value="Sh??r??nah">Sh??r??nah</option>
                <option value="A?? ????r">A?? ????r</option>
                <option value="Rafa???">Rafa???</option>
                <option value="Ash Shaykh Zuwayd">Ash Shaykh Zuwayd</option>
                <option value="Bi???r al ???Abd">Bi???r al ???Abd</option>

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
