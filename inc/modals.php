    <!-- ABOUT -->
    <div id="about" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg"">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo _text('MENU_ABOUT_US'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $about_text; ?></p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button"><?php echo _text('CLOSE'); ?></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- / ABOUT -->

    <?php if (isset($jobalert) && $jobalert=='on'): ?>
    <!-- JOB ALERT -->
    <div id="job_alert" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign Up for Job Alerts</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                </div>
                <div class="modal-body">
                    <p>	<script src="https://www.zipalerts.com/subscribe-widget/<?php echo $zipalert; ?>.js"></script></p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button"><?php echo _text('CLOSE'); ?></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- JOB ALERT -->
	<?php endif; ?>
 
    <!-- PRIVACY -->
    <div id="privacy" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo _text('MENU_PRIVACY'); ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $privacy_text;?></p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button"><?php echo _text('CLOSE'); ?></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- / PRIVACY -->
    
    <!-- TERMOFUSE -->
    <div id="termsofuse" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo _text('MENU_TERM_OF_USE'); ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $term_of_use_text; ?></p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button"><?php echo _text('CLOSE'); ?></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- / TERMOFUSE -->