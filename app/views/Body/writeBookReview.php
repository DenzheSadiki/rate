<?php
/**
 * Created by PhpStorm.
 * User: Denzhe Sadiki
 * Date: 5/23/2016
 * Time: 11:07 AM
 */

//\\$IMDB=$data['id'];
use Helpers\Url;
//print_r($data['contentID']);
$contentID=$data['contentID'];
$title=$data['title'];
$publisher=$data['publisher'];
$isbn=$data["isbn"];
$author=$data["author"];
$summary=$data['summary'];




echo('
<div class=\'ratingDivUpdated\'>
    <div id="rateYo" class="starRatingMove" style="width: 520px;position: relative;top: 258px;"></div>

</div>
 ');


if(isset($isbn))
{

    echo('


    <div class="moveheaderBackgroundUpdated"   style="background-image: URL(http://covers.librarything.com/devkey/1a154ad3bc478f00989d91ca77af194b/medium/isbn/'.$isbn.');   ">
    </div>');

}
else
{
    echo('


    <div class="moveheaderBackgroundUpdated"   style="background-image: URL(/app/templates/default/image/missingImage.png);">  </div>');

}



    if(isset($isbn))
    {
        echo('<div class="movieHeaderUpdated" style="background-image: URL(http://covers.librarything.com/devkey/1a154ad3bc478f00989d91ca77af194b/medium/isbn/'.$isbn.') ;">');

    }
    else
    {
    echo('<div class="movieHeaderUpdated" style="background-image: URL(/app/templates/default/image/missingImage.png) ;">');
    }


echo('   </div>





    <div class="movieDetailsUpdated" style="width: 632px;" >
     <h2 class="headline5">     Title: ' .$title.' </h2>
<h3 class="headline5"> ISBN: '.$isbn.' </h3>
     <h3 class="headline5"> Author: '.$author.' </h3>

     <span class="tagline" style="height: 85px;" ><h3 class="headline5">Story Line: '.$summary.'</h3></span>

   </div>
'
);


?>

<html>

<div class="WrittenContainer">
<form id="written" action="#" method="post" >
 <div class='textEditor' style="position: absolute;top: 3%;" >






   <input type="hidden" value="<?php echo($title);   ?>" name="title" >
    <input type="hidden" value="<?php echo($data['contentID']);   ?>" name="content_id" >

  <textarea name="editor2" id="editor1" rows="10" cols="80">
              <h1 style=\"text-align: center;\"><strong>BOOK REVIEW TEMPLATE</strong></h1>
<h1 style=\"text-align: center;\">&nbsp;</h1>
<p>Note: &nbsp;DON&rsquo;T FORGET that movie titles are written within &ldquo;quotation marks!&rdquo;</p>
<p><br /><br /></p>
<p><strong>HEADLINE: </strong>&nbsp;Include the title of the movie (try to use a pun!)</p>
<p>&nbsp;</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #1:</strong> &nbsp;</p>
<p>Introduce the movie by stating that you&rsquo;ve just seen this movie and would like to give an opinion about it. &nbsp;Mention a couple of details that might help the reader understand what type of movie you are talking about. &nbsp;Give credit to the company that published it.</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #3</strong>:</p>
<p>&nbsp;Summarize the plot (story). &nbsp;Where and when did it take place? &nbsp;Who are the main characters? &nbsp;What is the story about? &nbsp;Remember, do NOT include spoilers and do not tell how the story ends! &nbsp;&nbsp; Talk about the actors/actresses and discuss who did a good job and who didn&rsquo;t. &nbsp;(In &ldquo;A Christmas Carol&rdquo; it would be voice overs and cartooning.</p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #4</strong>&nbsp;</p>
<p>Talk about what you liked about the movie and what you didn&rsquo;t like. &nbsp;Be sure to include specific details and scenes.</p>
<p><br /><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PARAGRAPH #5</strong>:</p>
<p>&nbsp;What group of people would like this movie? &nbsp;Who would you recommend it to? &nbsp;Who would you not recommend it to? &nbsp;What&rsquo;s the MPAA rating of the movie (G, PG, PG-13, R, etc&hellip;)? &nbsp;What is your final word on the film: &nbsp;Is it good or bad?</p>
            </textarea>
            <script>
                // Replace the <textarea id=\"editor1\"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
         
            </script>

     <div class="previewUpdated">
         <div class="card medium  previewCard"   style="width: 545PX;height: 260px;">
             <!-- Card Content -->
             <div  class="input-field col s12" style="margin-top: 34px;margin-left: 15px;margin-right: 15px;padding-top: 62px;">
                 <textarea  id="textarea1"  name="preview" class="materialize-textarea" maxlength="500" required ></textarea>
                 <label for="textarea1">summary</label>
             </div>
             <div class="card-content" style="position: relative;top: -14px;left: -3px;"></br>
                 <p>Please provide a brief summary of your review</p>
             </div>
         </div>
     </div>

            <input type="hidden" value="<?php echo($data['contentID']);?>" name="theID">
                 <input type="hidden" value="1" name="rateyoid" id="rateyoid">
     <input type="hidden" value="1" name="uploadReadReview" id="rateyoid">

     <div  class="reviewSubmisionbuttons3"   >
         <button id="show-dialog"  class="waves-effect waves-light btn-large   red closebuttonConfirmation" ><i class="material-icons left">send</i>publish</button>


     </div>


</div>

</form>
<div class="messsageboxReview">
    <div class="card small " style="display: none">
        <div class="title">

            <h4 class="center"   style="background: rgb(0, 0, 0);color: white">
                CONFIRMATION
            </h4>
        </div>
        <div  class="media">
     <span class="confrimationMessageText center"  >
      please confirm submision
</span>

        </div>

        <div class="card-action">

            <button class="waves-effect waves-light red btn submitReviewButton"  style="color: white;">continue</button>
            <button class="waves-effect waves-light red btn closebuttonConfirmation"  style="color: white;">cancel</button>
        </div>


    </div>
</div>
<div class="coverConfrimationMessageReview" >
</div>
</div>
</html>