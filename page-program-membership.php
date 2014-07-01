<?php get_header(); ?>



<?php // <body> ?>



    <div class="container">



        <div class="row">

            <div class="col-xs-12">

                <img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/06/satisfaction-guarantee-emblem.png" alt="SatisfactionGuaranteed" class="sales-desktop-header-image">

            </div>

        </div>



        <div class="row sales-desktop-header-text">

            <div class="col-xs-12 col-md-8 col-md-offset-2">

                <p>invisibleCRM Partner Membership Programs provide enterprise customers and integration partners with tools, services and the training necessary for rapid and successful CRM Desktop implementations and on-going maintenance.</p>

                <p><strong><em>Say hello to the superior CRM integration and increased ROI.</em></strong></p>

            </div>

        </div>



        <div class="row">

            <div class="col-xs-12">

                <h2>What Makes Our Partner Programs So Different?</h2>

            </div>

        </div>



        <div class="row col-md-8 col-md-offset-2">

            <div class="col-sm-4 sales-desktop-feature">

                <h3 class="sales-desktop-feature-title">SUCCESSFUL INTEGRATION AND CUSTOMIZATION</h3>

                <p class="sales-desktop-feature-text">

                    CRM Desktop products for Outlook and Lotus Notes are highly configurable to meet your business needs and increase your overall ROI.

                </p>

            </div>

            <div class="col-sm-4 sales-desktop-feature">

                <h3 class="sales-desktop-feature-title">HIGHLY CUSTOMIZABLE AND SCALEABLE</h3>

                <p class="sales-desktop-feature-text">

                    There are dozens of configuration types which can be performed across multiple categories - there is no end to how far you can customize.

                </p>

            </div>

            <div class="col-sm-4 sales-desktop-feature">

                <h3 class="sales-desktop-feature-title">EXCLUSIVE RESOURCES AND ADVANCED TRAINING</h3>

                <p class="sales-desktop-feature-text">

                    Exclusive resources and advanced training offered through this program significantly accelerate productivity and lower costs.

                </p>

            </div>

        </div>

        

        <div class="row">

            <div class="col-xs-12 col-md-8 col-md-offset-2">

                <h2>It's never been easier to lower user training, increase user adoption and realize the true ROI from your CRM solution. </h2>

            </div>

        </div>



    </div>

    

    <div class="sales-desktop-pricing-wrap">

        <div class="container">
        
            <div class="row sales-desktop-pricing-text-wrap">

                <div class="col-xs-12">

                    <p class="sales-desktop-pricing-text"></p>

                </div>

            </div>


            <table class="pricing-tiers">

                <tbody>

                    <tr class="pricing-tier-titles">

                        <td>Gold</td>

                        <td>Platinum</td>
                        
                    </tr>

                    <tr class="pricing-tier-descriptions">

                        <td>

                            Get immediate access to support your customization with the right tools, services and training to successfully deploy CRM Desktop!

                            <a href="#todo" class="pricing-tier-trial">get started today!</a>

                        </td>

                        <td>

                            Gain immediate benefits with a successful rollout and ROI with expanded services uniquely designed for your requirements!

                            <a href="#todo" class="pricing-tier-trial">get started today!</a>

                        </td>
                        
                    </tr>

                    <tr class="pricing-tier-features">

                        <td>

                            <ul>

                                <li>40% off blended hourly rates</li>

                                <li>74% off iStudio</li>

                                <li>Advanced Developers Guide &amp; Library</li>

                                <li>Reusable Sample Code for CRMD Config</li>
                                
                                <li>Volume DB Analysis Tools</li>
                                
                                <li>One Solution Kit of Your Choice</li>
                                
                                <li>CRMD user help source files for Adobe RoboHelp</li>
                                
                                <li>Editable HTML version of CRM Desktop help</li>
                                
                                <li>Direct access to iCRM internal ticket-tracking system</li>
                                
                                <li>Access to internal iCRM Support KB</li>
                                
                                <li>Help Desk, development, System Integrator training</li>
                                
                                <li>Upgrade Protection</li>
                                
                                <li>50% Annual Package Renewal Rate</li>

                            </ul>

                        </td>

                        <td>

                            <ul>

                                <li>50% off blended hourly rates</li>

                                <li>iStudio included</li>

                                <li>Advanced Developers Guide &amp; Library</li>

                                <li>Reusable Sample Code for CRMD Config</li>
                                
                                <li>Volume DB Analysis Tools</li>
                                
                                <li>One Solution Kit of Your Choice</li>
                                
                                <li>CRMD user help source files for Adobe RoboHelp</li>
                                
                                <li>Editable HTML version of CRM Desktop help</li>
                                
                                <li>Direct access to iCRM internal ticket-tracking system</li>
                                
                                <li>Access to internal iCRM Support KB</li>
                                
                                <li>Help Desk, development, System Integrator training</li>
                                
                                <li>Upgrade Protection</li>
                                
                                <li>50% Annual Package Renewal Rate</li>
                                
                                <li>Package signing tool</li>
                                
                                <li>Annual Health Check/review (2-3 days)</li>

                            </ul>

                        </td>
                        
                    </tr>

                </tbody>

            </table>

        </div>

    </div>



<script>

(function($){$(function(){

    var wrap = $('.sales-desktop-pricing-wrap');

    var list = $('.pricing-tier-features td:nth-child(2) ul');

    var height = list.offset().top - wrap.offset().top;

    var pseudo = $('<div style="position:absolute;width:100%;background:#495b67;height:' + height + 'px;top:0;left:0;z-index:-1;"></div>');



    wrap.find('.container').append(pseudo);



    if ($(window).innerWidth() < 768)

    {

        var curCol = 0;

        var colCount = 2;



        $('.sales-desktop-pricing-text').after(

            '<p class="pricing-tiers-controls"><a href="#" data-dir="-1" class="pricing-tiers-control">&larr;</a><a href="#" data-dir="1" class="pricing-tiers-control">&rarr;</a></p>'

        );



        $('.pricing-tiers tr').each(function(){

            $(this).children('td').each(function(index){

                $(this).attr('data-col', index);

            });

        });



        $('.pricing-tiers-control').on('click', function(e){

            e.preventDefault();

            

            curCol += $(this).data('dir');



            if (curCol < 0) curCol = colCount - 1;

            if (curCol > colCount - 1) curCol = 0;



            $('.pricing-tiers td').hide();



            console.log($('td[data-col=' + curCol + ']'));



            $('td[data-col=' + curCol + ']').css('display', 'table-cell');

        });

    }

})})(jQuery)

</script>



<?php // </body> ?>



<?php get_footer(); ?>