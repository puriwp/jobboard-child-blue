<div id="refine-resume">
  <form id="resume-search-form" action="<?php echo esc_url( jobboard_get_permalink( 'resume_search' ) ); ?>" method="get">

    <div class="row">
      <div class="col-md-6">

        <div class="row">
          <div class="col-md-12">
            <h3 class="uppercase field-title"><?php echo __('Search Resumes', 'jobboard'); ?></h3>
          </div>

          <div class="col-md-6">
            <div class="form-group">

              <?php

              $typed_keyword = isset($_GET['resume_search_keyword']) ? $_GET['resume_search_keyword'] : '';


              ?>

              <label for="resume_search_keyword"><?php _e( 'Keyword', 'jobboard' ); ?></label>
              <input type="text" id="resume_search_keyword" name="resume_search_keyword" class="form-control" value="<?php echo $typed_keyword; ?>" placeholder="<?php echo __('Enter Keywords', 'jobboard'); ?>" />
            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->

          <div class="col-md-6">
            <div class="form-group">


              <?php

              $typed_location = isset($_GET['resume_search_location']) ? $_GET['resume_search_location'] : '';

              ?>

						<?php if( jobboard_option( 'resume_location_input_type' ) == 'input_text' ) :?>

						<label for="resume_search_location"><?php _e( 'Location', 'jobboard' ); ?></label>
						<input type="text" id="resume_search_location" name="resume_search_location" class="form-control" value="<?php echo $typed_location; ?>" placeholder="<?php echo __('Any Location', 'jobboard'); ?>" />

						<?php else: ?>

						<select class="form-control" name="location" id="location">
						<?php
							echo '<option value="" selected="selected">'.__( 'Any', 'jobboard' ).'</option>';
							$locations = jobboard_get_resume_location();
							foreach( $locations as $location ){
								echo '<option value="'.esc_attr( $location['value'] ).'">'.esc_attr( $location['label'] ).'</option>';
							}
						?>
						</select>

						<?php endif;?>
            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->

        </div><!-- /.row -->


        <div class="row">

          <div class="col-md-6">
            <div class="form-group job-filter-dropdown">

              <label for="resume_search_category"><?php echo __('Resume Category', 'jobboard'); ?></label>
              <select name="resume_category" id="resume_category">

                <option value=""><?php echo __('Resume Category', 'jobboard'); ?></option>

                <?php

                  $args = array(
                    'orderby'           => 'name',
                    'order'             => 'ASC',
                    'hide_empty'        => true
                  );
                  $resume_categories = get_terms( 'resume_category', $args );

                  foreach($resume_categories as $resume_category){

                    $selected_resume_category = $_GET['resume_category'];

                    $selected = '';

                    if($selected_resume_category == $resume_category->slug){
                      $selected = 'selected="selected"';
                    }

                    echo '<option value="'.$resume_category->slug.'"'. $selected .'>'.$resume_category->name.'</option>';

                  }

                $select_label = __('Resume Category', 'jobboard');

                ?>

              </select>


              <script>

                jQuery(document).ready(function($){

                  "use strict";

                  // Homepage job filter
                  $('#resume_category').minimalect({
                    placeholder : '<?php echo $select_label; ?>'
                  });

                });


              </script>

            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->

          <div class="col-md-6">
            <div class="form-group job-filter-dropdown">

              <label for="resume_search_career_level"><?php echo __('Career Level', 'jobboard'); ?></label>
              <select name="career_level" id="resume_search_career_level">

                <option value=""><?php echo __('Career Level', 'jobboard'); ?></option>

                <?php

                $args = array(
                  'orderby'           => 'name',
                  'order'             => 'ASC',
                  'hide_empty'        => true
                );
                $resume_levels = get_terms( 'career_level', $args );

                foreach($resume_levels as $resume_level){

                  $selected_resume_level = $_GET['career_level'];

                  $selected = '';
                  if( $selected_resume_level == $resume_level->slug ){
                    $selected = 'selected="selected"';
                  }

                  echo '<option value="'.$resume_level->slug.'"'. $selected .'>'.$resume_level->name.'</option>';

                }

                $select_label = __('Career level', 'jobboard');

                ?>

              </select>

              <script>

                jQuery(document).ready(function($){

                  "use strict";

                  // Homepage job filter
                  $('#resume_search_career_level').minimalect({
                    placeholder : '<?php echo $select_label; ?>'
                  });

                });


              </script>

            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->


        </div><!-- /.row -->


      </div><!-- /.col-md-6 -->


      <div class="col-md-6">


        <div class="row">
          <div class="col-md-6">

            <div class="form-group">

              <h3 class="uppercase field-title"><?php echo __('Expected Salary', 'jobboard'); ?></h3>


              <div class="row">
                <div class="col-md-6">

                  <?php

                  $typed_salary_from = isset($_GET['resume_search_expected_salary_from']) ? $_GET['resume_search_expected_salary_from'] : '';

                  ?>

                  <label for="resume_search_expected_salary_from"><?php echo __('From', 'jobboard'); ?></label>
                  <input type="text" id="resume_search_expected_salary_from" name="resume_search_expected_salary_from" class="form-control" value="<?php echo $typed_salary_from; ?>" placeholder="<?php echo __('from', 'jobboard'); ?>" />
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 col-salary-range-to">

                  <?php

                  $typed_salary_to = isset($_GET['resume_search_expected_salary_to']) ? $_GET['resume_search_expected_salary_to'] : '';

                  ?>

                  <label for="resume_search_expected_salary_to"><?php echo __('From', 'jobboard'); ?></label>
                  <input type="text" id="resume_search_expected_salary_to" name="resume_search_expected_salary_to" class="form-control" value="<?php echo $typed_salary_to; ?>" placeholder="<?php echo __('to', 'jobboard'); ?>" />
                </div><!-- /.col-md-6 -->

              </div>

            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->

          <div class="col-md-6">
            <div class="form-group">

              <?php

              $typed_experience = isset($_GET['resume_search_experience']) ? $_GET['resume_search_experience'] : '';

              ?>

              <h3 class="uppercase field-title"><?php echo __('Experience', 'jobboard'); ?></h3>
              <label for="resume_search_experience"><?php echo __('Experience', 'jobboard'); ?></label>
              <input type="text" id="resume_search_experience" name="resume_search_experience" class="form-control" value="<?php echo $typed_experience; ?>" />

              <input type="text" class="slider" data-slider-values="1,5,10,15,20,25,30,35,40" data-slider="true" value="" />

            </div><!-- /.form-group -->
          </div><!-- /.col-md-6 -->


        </div><!-- /.row -->


        <div class="form-group">
          <?php
          $button_text = __('Search', 'jobboard');
          ?>
          <button type="submit" name="submit" class="btn btn-search-resume uppercase" value="1"><?php echo esc_attr( $button_text ); ?></button>
        </div><!-- /.form-group -->




      </div><!-- /.col-md-6 -->

    </div><!-- /.row -->

  </form><!-- /#resume-search-form -->

</div><!-- /#refine-resume -->
