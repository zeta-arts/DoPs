        <script type="text/javascript">
            
                function proc_hide_submit(){ //call to action, call by starting flash
                    document.getElementById('signup_submit').style.width = '0';
                    document.getElementById('signup_submit').style.height = '0';
                    document.getElementById('signup_submit').style.visibility = 'hidden';
                }

                function proc_trigger_submit(){ //call to action, call by click event
                    $_jq('#signup_submit').trigger('click');
                    $_jq('#signup_submit').attr('disabled', 'disabled');
                }
                        
        </script>