<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Request a quote</title>
        <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        
        <script src="Scripts/jquery-1.8.3.js"></script>
        <script src="Scripts/jquery.validate.js"></script>

        <script src="Scripts/bootstrap.js"></script>
        <link href="Content/bootstrap.css" rel="stylesheet" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Content/bootstrap-responsive.css" rel="stylesheet">
        <script>
            $(document).ready(function () {

                $('#eximg').hide();

                $('#example').click(
                    function () {
                        $('#eximg').slideToggle();
                    }
                );

                $('#theform').validate({
                    rules: {
                        contact_name: "required",
                        company_name: "required",
                        email: { required: true, email: true },
                        what_service: "required",
                        cert_type: "required"
                    }
                });

                $('#add').click(function () {
                    //count number of tr elements in the quote table
                    var rowCount = $('#quotetable tr').length;
                    //subtract one so that the header row doesn't count
                    var num = rowCount - 1;
                    //add the row -- make sure it is all one row, for some reason
                    $('#quotetable').append("<tr><td><input type='text' class='input-mini' name='quantity-" + num + "'></td><td><input type='text' name='manufacturer-" + num + "'></td><td><input type='text' name='model-" + num + "'></td><td><input type='text' name='nomenclature-" + num + "'></td><td><input type='text' name='range_accuracy-" + num + "'></td></tr>");
                });

            });

        </script>

        <style type="text/css">
            .error {
                color:  #ff6a00;
            }

            .required {
                color:  red;
            }
            
            #example{
                margin-left: 10px;
            }

            #eximg {
                padding-bottom: 10px;
            }
            #access {
	display: block;
	float: left;
	padding: 10px 10px 10px 0px;
}
#access ul {
	list-style: none;
	margin: 0;
	padding-left: 0;
}
#access li {
	float: left;
	position: relative;
}
#access a {
	display: block;
	line-height: 2em;
        color:rgb(191, 191, 191);
	padding: 0 1em;
	text-decoration: none;
}
#access ul ul {
	box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	display: none;
	float: left;
	position: absolute;
	top: 2em;
	left: 0;
	z-index: 99999;
}
#access ul ul ul {
	left: 100%;
	top: 0;
}
#access ul ul a {
	background: #000;
	line-height: 1em;
        color:rgb(191, 191, 191);
	padding: .5em .5em .5em 1em;
	width: 10em;
	height: auto;
}
#access li:hover > a,
#access ul ul :hover > a {
	background: #000;
        color:rgb(191, 191, 191);

}
#access ul ul a:hover {
	background: #000;
        color:rgb(191, 191, 191);
}
#access ul li:hover > ul {
	display: block;
	background: #000;
	padding: 5px 5px 5px 5px;
}
.topbar {background-color:rgb(34, 34, 34);}
.topbar-inner {-webkit-box-shadow: rgba(0, 0, 0, 0.247059) 0px 1px 3px 0px, rgba(0, 0, 0, 0.0980392) 0px -1px 0px 0px inset;
background-color: rgb(34, 34, 34);
background-image: -webkit-linear-gradient(top, rgb(51, 51, 51), rgb(34, 34, 34));
background-repeat: repeat-x;
box-shadow: rgba(0, 0, 0, 0.247059) 0px 1px 3px 0px, rgba(0, 0, 0, 0.0980392) 0px -1px 0px 0px inset;
color: rgb(64, 64, 64);
display: block;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 16px;
font-weight: normal;
height: 52px;
line-height: 18px;
width: 1135px;}
.brand {margin-left:0;}
input[type="text"]{width:130px; padding-right:5px;}
input[type="text"].input-mini{width:60px; padding-right:5px;}
        </style>
    </head>
    <body>

       <!-- top bar -->
	<div class="topbar" id="head" data-scrollspy="scrollspy">
    	<div class="topbar-inner">
        <div class="container">
        		
				<ul id="access"><div class="menu-primary-container"><ul id="menu-primary" class="menu"><li><a class="brand" href="http://www.indianastandards.com/">&nbsp<img src="brand.png"></a></li><li id="menu-item-211" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-211"><a href="http://www.indianastandards.com">Home</a></li>
<li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a href="http://www.indianastandards.com/?page_id=5">Capabilities</a>
<ul class="sub-menu">
	<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="http://www.indianastandards.com/?page_id=22">Mass</a></li>
	<li id="menu-item-370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-370"><a href="http://www.indianastandards.com/?page_id=365">Flow</a></li>
	<li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="http://www.indianastandards.com/?page_id=20">Length</a></li>
	<li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="http://www.indianastandards.com/?page_id=18">Electrical</a></li>
	<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a href="http://www.indianastandards.com/?page_id=105">Refractive Index</a></li>
	<li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="http://www.indianastandards.com/?page_id=97">Light</a></li>
	<li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126"><a href="http://www.indianastandards.com/?page_id=84">Time/Frequency</a></li>
	<li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125"><a href="http://www.indianastandards.com/?page_id=92">Sound</a></li>
	<li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123"><a href="http://www.indianastandards.com/?page_id=101">Conductivity/pH</a></li>
	<li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="http://www.indianastandards.com/?page_id=88">Temp/Humidity</a></li>
	<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187"><a href="http://www.indianastandards.com/?page_id=7">On-site Capabilities</a></li>
</ul>
</li>
<li id="menu-item-312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a href="http://www.indianastandards.com/?page_id=306">Accreditation</a></li>
<li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="http://www.indianastandards.com/?page_id=9">FAQ/Resources</a></li>
<li id="menu-item-387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-387"><a href="http://www.indianastandards.com/quotebuilder">Contact</a></li>
</ul></div></ul>
        </div>
       </div>
	</div>	<br>
       <div class="container">
	<div class="row">
        <div class="span12"><h3>By phone: 317-787-6578 | By e-mail:<a href="mailto:kmeyers@indianastandards.com">kmeyers@indianastandards.com</a></h3><h4>Expedited jobs by appointment only. Contact us to set up an appointment.</h4></div>
	</div>
        <div class="row">
            <div class="span12"><h1>Quote Builder</h1></div>
              
        </div>

        <hr color="#000">

        <div class="row">

            <form enctype="multipart/form-data" id="theform" method="post" action="submit.php">
                <div class="span3">
                <h6><span class="required">*</span> denotes required fields.</h6>   
                <label for="contact_name">Full Name <span class="required">*</span></label>
                <input type="text" name="contact_name" id="contact_name" value=""><br>

                <label for="company_name">Company Name <span class="required">*</span></label>
                <input type="text" name="company_name" id="company_name" value=""><br>

                <label for="email">E-mail <span class="required">*</span></label>
                <input type="text" name="email" id="email" value=""><br>

                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" value=""><br>

                <hr>

                <label for="what_service">Where will this service be needed?<span class="required">*</span></label>
                    <select name="what_service" id="what_service">
                        <option></option>
                        <option>In-House (at our facility)</option>
                        <option>On-Site (at your facility)</option>
                    </select>

                <hr>

                <label for="cert_type">What type of certificate do you need?<span class="required">*</span></label>
                    <select name="cert_type" id="cert_type">
                        <option></option>
                        <option>Basic (Included)</option>
                        <option>with data ($15/each)</option>
                        <option>with test uncertainty ($10/each)</option>
                        <option>Long form (all $35/each)</option>
                    </select>

                </div>
                <div class="span7 offset1">
                    <div class="row">
                        <h4>Please insert information about your instrument(s) below:</h4>
                    </div>

                    <div class="row" id="eximg">
                    <img src="example.png" class="span7" width="100%">
                    </div>

                    <div class="row">
                        <table id="quotetable" width="100%" border="0" >
                            <tr>
                                <div class="btn btn-success" id="add">Add an instrument</div>
                                <div class="btn btn-info" id="example">See example</div><br><br>
                            </tr>
                            <tr style="margin-top: 10px">
                                <th>Quantity</th>
                                <th>Manufacturer</th>
                                <th>Model Number</th>
                                <th>Nomenclature</th>
                                <th>Range/Accuracy</th>
                            </tr>

                            <tr>
                                <td>
                                <input type="text" class="input-mini" size="3" name="quantity-1">
                                </td>
                                <td>
                                <input type="text" name="manufacturer-1">
                                </td>
                                <td>
                                <input type="text" name="model-1">
                                </td>
                                <td>
                                <input type="text" name="nomenclature-1">
                                </td>
                                <td>
                                <input type="text" name="range_accuracy-1">
                                </td>
                            </tr>
                        </table>

                        <h5>If you are asking for on-site service on an oven, freezer, chamber, etc., <a href="OvenCalibrationQuestionnaire.doc">click this link</a>, fill out form and attach.</h5>

                        <h5>Attachment(s): </h5>
                        <input type="file" multiple="true" name="attachments1"><br><br>
<input type="file" multiple="true" name="attachments2"><br><br>
<input type="file" multiple="true" name="attachments3"><br><br>
                        <button type="submit" class="btn-large btn-inverse">Submit Quote Request</button>
                    </div>
                </div>
            </form>

           
        </div>

        </div>
    </body>
</html>