<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once './header.php';
?>
	<style>
    	.bigTextCenter{
			text-align:center;
			font-size:24px;
			font-family:"Comic Sans MS", cursive;
			color: #456b12;
		}
		.imageShelfContainer{
			perspective: 10000px;
  margin: 10px auto;
  width: 80%;
  text-align: center;
		}
		.shelf:hover {
  transform: rotate(0)
  
}
.shelf {
  transition: .3s;
  transform: rotateY(25deg);
  float: left;
  width: 50%;
  height: 400px;
  }

.shelf figure {
  box-shadow: -6px 6px 2px -3px  rgba(100,100,100,.1);
  width: 80%;
  padding: 1em;
  display: inline-block;
  margin-right: 1em;
  background: rgba(250,200,200,0.1);
  border: 1px solid rgba(250,200,200,.5);
}

.shelf figcaption {
  text-align: center;
  margin: .5em 0;
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: bold;
  color: darken(tomato, 15%);
}

.shelf img {
  display: block;
  height: 300px;
  max-width: 100%;
  margin: 0 auto;
}
/*		.shelf{
			float:left;
			padding:20px 10px;
			transform:rotateY(35deg);
			transform-style:preserve-3d;
			box-shadow:2px 2px 6px #aaa;
		}
		.shelf img{
			width: 60%;
			margin:auto;
		}
*/    </style>
    <title>Consip</title>
	<div class="content">
<!--		<div class="homePageImageDiv">
			<img class='homePageImage' src='../../images/icons/coming_soon.jpg'></img>
		</div>
-->	
		<div class="bigTextCenter">
        	fai scorrere il tuo messaggio per la città
        </div>
        <div class="imageShelfContainer">
        	<div class="shelf">
            	<figure>
	            	<img src="../../images/publicity/1.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
            		<img src="../../images/publicity/2.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
            		<img src="../../images/publicity/3.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
            		<img src="../../images/publicity/4.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
        	    	<img src="../../images/publicity/5.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
    	        	<img src="../../images/publicity/6.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
	            	<img src="../../images/publicity/7.png" />
                </figure>
            </div>
        	<div class="shelf">
            	<figure>
	            	<img src="../../images/publicity/8.png" />
                </figure>
            </div>
        </div>
	</div>
<?php
	require_once './footer.php';
?>