@extends('layout3')


  <div id="wrapper">
      <div id="page" class="container">
          <h1>New Article</h1>

          <form action="">
              <div class="field">
                  <label class="label" for="title">Title</label>

                  <div class="control">
                      <input class="input" type="text" name="title" id="title">
                  </div>

              </div>

              <div class="field">
                  <label class="label" for="excerpt">Excerpt</label>

                  <div class="control">
                      <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                 </div>

              </div>

              <div class="field">
                  <label class="label" for="body">Body</label>

                  <div class="control">
                      <textarea class="textarea" name="body" id="body"></textarea>
                  </div>
             </div>

          </form>
  </div>


