@extends('themes.default.common.master')
@section('content')<!-- banner -->
<section class="page-title page-title-layout5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading text-white">Make an Appointment</h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                @if(Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-block alert-success alert-dismissible" style="color:green">
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger" style="color:red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form method="post" action="{{route('appointment')}}">
                    @csrf
                    <div class="book-sept-block clearfix">
                        <h6>PATIENT DETAILS</h6>
                        <div class="book-form-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Patient Name*</label>
                                        <input type="text" name="full_name" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Address*</label>
                                        <input type="text" name="address" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Phone Number*</label>
                                        <input type="text" name="contact" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Your Email Address*</label>
                                        <input type="email" name="email" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="form-group">
                                        <label>Gender*</label>
                                        <select class="form-control" name="gender">
                                            <option name="gender" value="male">Male</option>
                                            <option name="gender" value="female">Female</option>
                                            <option name="gender" value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <label>DOB*</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select class="form-control" name="day">
                                                    <option value="">Day</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select class="form-control" name="month">
                                                    <option value="">Month</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select class="form-control" name="year">
                                                    <option value="">Year</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends book-form-block -->
                    </div>
                    <!-- ends book-sept-block -->
                    <div class="book-sept-block clearfix">
                        <h6>SCHEDULE INFORMATION</h6>
                        <div class="book-form-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Select Department*</label>
                                        <select class="form-control" id=" " name="department" required>
                                            <option selected disabled value="0">Choose Department</option>
                                        @foreach($category as $value)
                                                <option value="{{$value->id}}">{{$value->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Select Doctor*</label>
                                        <select class="form-control mySelect" id="doctor" name="doctor" required>
                                            <option disabled selected value="0">Choose Doctor</option>
                                            @foreach($doctor as $value)
                                                <option d-slug="{{$value->post_title}}"
                                                        value="{{$value->id}}">{{$value->post_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Appointment Date*</label>
                                        <input type="date" class="form-control" name="appoint_date">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-8">
                                    <div class="form-group">
                                        <label>Preferred Time</label>
                                        <select class="form-control" name="time">
                                            <option value="10-12 pm">10 am to 12 pm</option>
                                            <option value="12-2 pm">12 pm to 2 pm</option>
                                            <option value="2-4 pm">2 pm to 4 pm</option>
                                            <option value="4-6 pm">4 pm to 6 pm</option>
                                            <option value="6-8 pm">6 pm to 8 pm</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                        {!! HCaptcha::renderJs() !!}
                        {!! HCaptcha::display() !!}
                        <!-- ends book-form-block -->
                    </div>
                    <!-- ends book-sept-block -->
                    <div class="book-form-block">
                        <div class="btn-grps">
                            <button type="submit" class="btn btn__primary btn__rounded ml-30">SEND</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
@stop
