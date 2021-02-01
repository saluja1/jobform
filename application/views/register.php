<?php $this->load->view('header'); ?>

    <div class="content">
        <div class="content_center">
            <h1 class="top_heading">Create an Account</h1>

            <div class="section_tabs section_tabs_products section_product no_background">
                <div class="section_mid">
                    <div class="sectin_bg no_background margin">
                        <div class="shoping_form shoping_form2">
                            <p class="pp2"><?php echo getCMSContents('create-an-account') ?> </p>

                            <form method="post">
                                <?php if($this->session->flashdata('error_msg')) {
                                    echo $this->session->flashdata('error_msg');
                                }?>
                                <p class="pp2" id="error">
                                </p>
                                <label>First Name</label>
                                <input type="text" required="" name="first_name"/>


                                <label>Last Name</label>
                                <input type="text" required="" name="last_name"/>

                                <label>Email Address</label>
                                <input type="email" onchange="checkEmail()" required="" name="email" id="email"/>

                                <label>Contact number</label>
                                <input type="tel" name="contact_no"/>

                                <label>Password</label>
                                <input type="password" required="" name="password" id="password"/>

                                <label>Confirm Password</label>
                                <input type="password" required="" name="con_password" id="con_password"/>

                                <input type="submit" onclick="this.form.submited=this.value;" name="Cancel" value="Cancel" formnovalidate/>
                                <input type="submit" onclick="this.form.submited=this.value;" name="Register" value="Register"/>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$this->load->view('footer');
?>
<script>


    var flag =false;
    function checkEmail()
    {

        var    v = $('#email').val();
        if(ValidateEmail(v))
        {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>cms/check_email",
                cache: false,
                data: {email: v},
                success: function (result) {
            if(result == false)
            {
                $('#error').html('<div class="alert alert-error" style="text-align: center;">'+
                    '<button data-dismiss="alert" class="close" type="button">×</button>'+
                    'Sorry Email already taken'+
                    '</div>');
            }else
            {
                $('#error').html('');
                flag= true;
            }
        },
                error: function (request, error) {
            $('#error').html('<div class="alert alert-error" style="text-align: center;">'+
                '<button data-dismiss="alert" class="close" type="button">×</button>'+
                error+
                '</div>');
        }
            });
        }else {
            $('#error').html('<div class="alert alert-error" style="text-align: center;">' +
                '<button data-dismiss="alert" class="close" type="button">×</button>' +
                'Sorry Email is invalid' +
                '</div>');
        }

    }

    function ValidateEmail(mail)
    {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
        {
            return (true);
        }
        return (false);
    }

    function matchPass()
    {
        var p,t;
        p=$('#password').val();
        t=$('#con_password').val();
        if(p.length<6)
        {
            $('#error').html('<div class="alert alert-error" style="text-align: center;">'+
                '<button data-dismiss="alert" class="close" type="button">×</button>'+
                'Password Must be grater then 6 characters'+
                '</div>');
            return false;
        }
        if(t.length<1)
        {
            return false;
        }

        if(t!=p)
        {
            $('#error').html('<div class="alert alert-error" style="text-align: center;">'+
                '<button data-dismiss="alert" class="close" type="button">×</button>'+
                'Password and Confirm password does Not match'+
                '</div>');
            return false;
        }
        //$('#error').html('');
        return true;
    }


    $( "form" ).submit(function( event ) {
        if(this.submited=="Cancel")
        {
        }else
        {
            if(!(flag && matchPass()))
            {
                event.preventDefault();
            }
        }


    });


</script>
