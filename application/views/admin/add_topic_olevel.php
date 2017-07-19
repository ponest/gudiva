<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 4/5/2017
 * Time: 12:35 PM
 */
?>
<form role="form"  class="add_topic_form">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject name">
            </div>
        </div>
       <div class="col-md-4">
           <div class="form-group">
               <label for="Class">Class</label>
               <select  class="form-control" name="class">
                   <option value="0" disabled="" selected="" >Class</option>
                   <option value="1" >Form one</option>
                   <option value="2">Form Two</option>
                   <option value="3">Form Three</option>
                   <option value="4">Form Four</option>
               </select>
           </div>
       </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="Topic"> Topic </label>
                <input type="text" class="form-control" id="topic" placeholder="topic name">
            </div>
        </div>
    </div>
   <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label for="Instructor"> Instructor </label>
                    <input type="text" class="form-control" id="Instructor" placeholder="Instructor name">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="InputFile">
                </div>
            </div>
        </div>
       <div class="col-md-5">
           <div class="form-group">
               <label for="Description"> Description </label>
               <textarea class="form-control" id="description" rows="4"></textarea>
           </div>
       </div>
       <div class="col-md-1" style="margin-top: 100px">
           <button type="submit" class="btn btn-default gudiva_button" >Submit</button>
       </div>

   </div>
</form>
