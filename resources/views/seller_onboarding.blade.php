@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pagination-area">

            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'person')" id="defaultOpen">Personal Info</button>
                {{--<button class="tablinks" onclick="openTab(event, 'account')">Account Security</button>--}}
                <button class="tablinks" onclick="openTab(event, 'professional')">Professional Info</button>
                <button class="tablinks" onclick="openTab(event, 'linked')">Linked Accounts</button>
            </div>

            <div ng-controller="profileController">
                <div id="person" class="tabcontent">
                    <h2>Personal Info</h2>
                    <p>Tell us a bit about yourself. This information will appear on your public</p>
                    <p>profile, so that potential buyers can get to know you better.</p>
                    <p style="text-align: right"><i>*Mandatory fields</i></p>
                    <hr/>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" for="full_name">Full Name*</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" name="surname" id="surname">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br><br><br>

                    <div ng-controller="FileUploadController">
                        <div class="form-group">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="control-label" for="avatar">Profile Picture*</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="file" ng-files="setTheFiles($files)" id="image_file">
                                <img src="" id="profile-img-tag" width="150px" style="border-radius: 50%;"/>
                                <button Onclick="store()" class="btn btn-primary">Upload File</button>

                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#profile-img-tag').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $("#image_file").change(function(){
                                        readURL(this);
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <br><br><br><br>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" for="phone">
                                <b>Phone Number*</b>
                                <code><i>Private</i></code>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" name="phone" value="" id="phone">
                        </div>
                    </div>

                    <br><br><br><br>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" for="description">Description*</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control" rows="4" name="description" placeholder="What do buyers need to know about you?"></textarea>
                        </div>
                    </div>

                    <br><br><br><br>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" for="lang">Language*</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" name="lang" placeholder="Language" id="lang">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control" name="proficiency" id="proficiency">
                                        <option>Unspecific</option>
                                        <option>Basic</option>
                                        <option>Conversational</option>
                                        <option>Fluent</option>
                                        <option>Native/Bilingual</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/><br/><br/>

                    <div class="form-group" style="text-align: right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default"><a ui-sref='professional()'>Continue</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div ng-controller="profileController">
                <div id="professional" class="tabcontent">
                    <h2>Professional Info</h2>
                    <p>This is your time to shine. Let potential buyers know what you do best </p>
                    <p> and how you gained your skills, certifications and experience. </p>
                    <p style="text-align: right"><i>*Mandatory fields</i></p>
                    <hr/>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Your Occupation*</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control" name="occupation" id="occupation">
                                        <option>Unknown</option>
                                        <option>Graphics &amp; Design</option>
                                        <option>Music &amp; Voiceover</option>
                                        <option>Videos &amp; Animation</option>
                                        <option>Digital Marketing</option>
                                        <option>Writing &amp; Translation</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/><br/><br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Availability*</label>
                            <p><code><i>Private</i></code></p>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="container">
                                <h4><b>Employment</b></h4>
                                <!-- Group of default radios - option 1 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="employment">
                                    <label class="custom-control-label" for="defaultGroupExample1">Part Time</label>
                                </div>
                                <!-- Group of default radios - option 2 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="employment" checked>
                                    <label class="custom-control-label" for="defaultGroupExample2">Full Time</label>
                                </div>
                                <h4><b>Monthly Income</b></h4>
                                <!-- Group of default radios - option 1 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample11" name="income">
                                    <label class="custom-control-label" for="defaultGroupExample1">Less than $500 per month</label>
                                </div>
                                <!-- Group of default radios - option 2 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample12" name="income" checked>
                                    <label class="custom-control-label" for="defaultGroupExample2">Between $500 and $1000 per month</label>
                                </div>
                                <!-- Group of default radios - option 3 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample13" name="income" checked>
                                    <label class="custom-control-label" for="defaultGroupExample2">More than $1000 per month</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/><br/><br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Skills*</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <!--<div ngFor="skill in skills"></div>-->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Skill</th>
                                    <th scope="col">Level</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="skill" placeholder="What's your skill" id="skill"></td>
                                    <td>
                                        <select class="form-control" name="level" id="level">
                                            <option>Unknown</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <br/><br/><br/><br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Education</label>
                        </div>
                        <div class="container">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="schlocation" placeholder="Country" id="country">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="schname" placeholder="College/University Name" id="schname">
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" name="title" id="title">
                                            <option>Title</option>
                                            <option>Associate</option>
                                            <option>B.A.</option>
                                            <option>B.Sc</option>
                                            <option>M.A</option>
                                            <option>M.B.A</option>
                                            <option>M.Sc.</option>
                                            <option>J.D.</option>
                                            <option>M.D.</option>
                                            <option>Ph.D</option>
                                            <option>B.Arch</option>
                                            <option>BFA</option>
                                            <option>MFA</option>
                                            <option>Certificate</option>
                                            <option>LLB</option>
                                            <option>LLM</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="coursemajor" placeholder="Major" id="major">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <input type="date" class="form-control" name="schyear" placeholder="Year" id="year">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Certification</label>
                        </div>
                        <div class="container">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="cert" placeholder="Certificate Or Award" id="cert">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" class="form-control" name="certyear" placeholder="Year" id="date">
                                    </div>
                                </div>

                                <br/>

                            </div>
                        </div>
                    </div>

                    <br/><br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label">Personal Web</label><br/>
                            <code><i>Private</i></code>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control" name="web" placeholder="Please provide your personal website URL" id="web">
                        </div>
                    </div>

                    <br/><br/><br/><br/>

                    <div class="form-group" style="text-align: right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" style="color: red"><a ui-sref='linked()'>Continue</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="linked" class="tabcontent">
                <div>
                    <h2>Linked Accounts</h2>
                    <p>Taking the time to verify and link your accounts can upgrade your credibility and help us provide you with more business. </p>
                    <p> Don’t worry, your information is and always will remain private.</p>
                </div>
                <hr/>
                <div>
                    <h3><b>Your Social Presence</b></h3>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h4><i class="fa fa-linkedin" aria-hidden="true"  style="font-size:25px; color: blue"></i>  Linkedin</h4>
                        </div>
                        <div style="text-align: right">
                            <button class="btn btn-default"><a href="#">Connect</a></button>
                        </div>
                    </div>

                    <br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h4><i class="fa fa-google" aria-hidden="true"  style="font-size:25px"></i>  Google</h4>
                        </div>
                        <div style="text-align: right">
                            <button class="btn btn-default"><a href="#">Connect</a></button>
                        </div>
                    </div>

                    <br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h4><i class="fa fa-facebook" aria-hidden="true"  style="font-size:25px; color: blue"></i>  Facebook</h4>
                        </div>
                        <div style="text-align: right">
                            <button class="btn btn-default"><a href="#">Connect</a></button>
                        </div>
                    </div>

                    <hr/>

                    <h3><b>Your Professional Presence</b></h3>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h4><i class="fa fa-soccer-ball-o" aria-hidden="true"  style="font-size:25px"></i>   Dribble</h4>
                        </div>
                        <div style="text-align: right">
                            <button class="btn btn-default"><a href="#">Connect</a></button>
                        </div>
                    </div>

                    <br/>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h4><i class="fa fa-stack-overflow" aria-hidden="true"  style="font-size:25px"></i>   Stack Overflow</h4>
                        </div>
                        <div style="text-align: right">
                            <button class="btn btn-default"><a href="#">Connect</a></button>
                        </div>
                    </div>

                    <br/>

                    <div class="form-group" style="text-align: right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default"><a href="">Finish</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

@endsection

{{--<div class="col-sm-12 well">--}}
{{--<li style="display: inline" class="active"><a ui-sref='person()'>Personal Info></a></li>--}}
{{--<li style="display: inline"><a ui-sref='account()'>Account Security></a></li>--}}
{{--<li style="display: inline"><a ui-sref='professional()'>Professional Info></a></li>--}}
{{--<li style="display: inline"><a ui-sref='linked()'>Linked Accounts</a></li>--}}
{{--</div>--}}
{{--<div class="col-sm-12 well">--}}
{{--<div ui-view=""></div>--}}
{{--</div>--}}
