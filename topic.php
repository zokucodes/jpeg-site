<!-- 
filename: topic.php
author: Anthony Krueger, Mitch Anderson
created: 9/5/2022
last modified: 29/5/2022
description: JPEG information
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="JPEG information">
    <meta name="keywords" content="JPEG">
    <meta name="author" content="Anthony Krueger, Mitch Anderson">
    <title>JPEG History</title>
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>
	<?php
	
	$page = 'topic';
	include_once('header.inc');
	?>
	<section class="main-content">
		<section id="jpeg-timeline-section" class="topic-section">
			<section class="section-information">
				<article class="information-container">
					<!-- This heading uses h2 because the h1 is in the header -->
					<h2 id="timeline">Timeline of the JPEG Image</h2> 
					<p>
						There is a small amount of contention as to the exact year that the International Standard for Organisation (ISO)
						set about creating a standard for digital images. Adobe (2022) claim that they started in 1986, whereas the Encyclopedia 
						Britannica (2022) claim they started in 1983. However, regardless of when they began trying to standardise digital photos, 
						it is documented that JPEG, an acronym for Joint Photographic Experts Group, was created in 1986 (Adobe, 2022; Encyclopedia Britannica, 2022).
					</p>
				</article>
			</section>
			<figure id="jpeg-timeline-figure">
				<img class="section-image" id="jpeg-timeline-image" src="images/jpeg-timeline3-image.webp"
					alt="a digital art made by AntonKurbatov">
				<figcaption><a target="_blank" href="https://www.deviantart.com/antonkurbatov/art/Unfathomable-fields-910386676">"Unfathomable fields"</a> by AntonKurbatov</figcaption>
			</figure>
		</section>
		<section class="topic-section">
			<figure id="jpeg-compression-figure">
				<img class="section-image" id="jpeg-compression-image" src="images/jpeg-compression-image.jpg"
					alt="a digital art made by Simon Lee">
				<figcaption>Digital art made by <a target="_blank" href="https://unsplash.com/@simonppt">Simon Lee</a></figcaption>
			</figure>
			<section class="section-information">
				<article class="information-container">
					<h2>JPEG Compression Steps</h2>
					<ol>
						<li> <strong>Conversion:</strong> Converts the base RGB colour image into a luminance and
							chrominance images to
							determine
							brightness and colour levels, respectively.
						</li>
						<li> <strong>Spatial Subsampling:</strong> When the image is in its simple form of luminance and
							chrominance,
							it’s YCC form, the
							spatial information of the image is separated as most of that information comes from the luminance levels.
							Having the low spatial information of the chrominance images are vital for the compression process.
							The subsampling process allows for the chrominance images to be halved without major loss of image
							resolution, unless viewed at high magnification.
						</li>
						<li> <strong>Transformation:</strong> The transformation step takes the information from the
							spatial subsampling stage and accounts for small sections of the image where there is little contrast.
							The JPEG members created a mathematical formula called the discrete cosine transform (DCT) to reduce digital
							information over the low contrast areas.
						</li>
						<li><strong>Quantization:</strong> Quantization is the step in which the compression of the
							image becomes irreversible in terms of loss in detail. While the DCT follows a mathematical formula to compress
							 the image, quantization scales the DCT coefficients by a factor dictated by the user.
						</li>
						<li><strong>Coding:</strong> Once the image has been transformed and put through the
							quantization process, it is ready to be transcribed into code to be transmitted digitally.
							To ensure that the level of coding for the image to be as small as possible, Huffman coding is used to
							represent the DCT coefficients.
						</li>
					</ol>
					<a target="_blank"
						href="https://www.imaging.org/site/IST/Resources/Imaging_Tutorials/What_s_Inside_a_JPEG_File/IST/Resources/Tutorials/Inside_JPEG.aspx?hkey=f9946f90-9f14-452d-897c-ac1612116e2d">
						Source</a>
				</article>
			</section>
		</section>
		<section class="topic-section">

			<section class="section-information">
				<article class="information-container">

					<h2>Functions of JPEG Images</h2>
					<p>
						On top of the ease that comes with having a standard form of digital image,
						being able to share and use them with ease, JPEG images had to be able to be displayed on the
						computer
						screens
						of the 1980’s,
						which were text only (Encyclopedia Britannica, 2022).
						JPEG images use what is known as lossy compression to average out colour variation on a level
						that the human
						eye, for the most part,
						has trouble detecting (Encyclopedia Britannica, 2022).
						It is possible that the file compression can force images to lose detail and quality (Adobe,
						2022).
					</p>
				</article>
			</section>
			<figure id="jpeg-function-figure">
				<img class="section-image" id="jpeg-function-image" src="images/jpeg-function-image.webp"
					alt="a photo took by Dimitar Belchev">
				<figcaption>Photo took by <a target="_blank" href="https://unsplash.com/@belchev">Dimitar Belchev</a></figcaption>
			</figure>
		</section>
		<section class="related-tech">
			<h2 id="other-tech-title">Related technologies</h2>
			<section class="topic-section">
				<figure class="other-tech-figure">
					<img class="other-tech-image" src="images/png.webp" alt="a digital art made by Vadim Bogulov">
					<figcaption>Art made by <a target="_blank" href="https://unsplash.com/@franku84">Vadim Bogulov</a></figcaption>
				</figure>
				<section class="section-information">

					<article class="information-container">


						<h3 id="png">PNG - .png</h3>
						<p>
							Short for “portable network graphics”, was created in 1996 as an open standard to replace
							GIF.
							It creates lossless, portable, compressed, bit-mapped images.
							It supports Indexed colour, grayscale and RGB colour as well as opacity and gamma
							correction.
						</p>
						<section class="pros-cons">
							<article class="pros pros-cons-box">
								<h4>Pros</h4>
								<ul>
									<li> Lossless Compression </li>
									<li>Full colour spectrum supported (16 million colours)</li>
									<li>Supports opacity and gamma correction </li>
								</ul>
							</article>
							<article class="cons pros-cons-box">
								<h4>Cons</h4>
								<ul>
									<li>Not suitable for printing (No CMYK support)</li>
									<li>Requires more storage</li>
									<li>Not universally supported</li>
								</ul>
							</article>
						</section>
					</article>
				</section>
			</section>
			<section class="topic-section">
				<figure class="other-tech-figure">
					<img class="other-tech-image" src="images/tiff.jpg" alt="a photo took by Efe Kurnaz">
					<figcaption>Photo took by <a target="_blank" href="https://unsplash.com/@efekurnaz">Efe Kurnaz</a></figcaption>
				</figure>
				<section class="section-information">
					<article class="information-container">
						<h3 id="tiff">TIFF - .tiff / .tif</h3>
						<p>
							Short for tagged image file format, it was created in 1986 by the Aldus Corporation (now
							absorbed into Adobe Inc) to create a common file used for scanned images (i.e., documents).
							It is a lossless compressed image file with RGB and CMYK support for up to 32 bits per
							colour component which in turn makes it ideal for printing, however it does take up more
							space as a result.
						</p>
						<section class="pros-cons">
							<article class="pros pros-cons-box">
								<h4>Pros</h4>
								<ul>
									<li>Lossless compression</li>
									<li>High image quality</li>
									<li>RGB and CMYK support for printing</li>
									<li>Support for transparencies and layers</li>
								</ul>
							</article>
							<article class="cons pros-cons-box">
								<h4>Cons</h4>
								<ul>
									<li>Low internet browser support</li>
									<li>Large image size</li>
								</ul>
							</article>
						</section>
					</article>
				</section>
			</section>
			<section class="topic-section">
				<figure class="other-tech-figure">
					<img class="other-tech-image" src="images/heif.jpg" alt="a photo took by Jason Leung">
					<figcaption>Photo took by <a target="_blank" href="https://unsplash.com/@ninjason">Jason Leung</a></figcaption>
				</figure>
				<section class="section-information">

					<article class="information-container">
						<h3>HEIF - .HEIC</h3>
						<p>
							Short for High Efficiency Image Format, it is the file format given to Apple devices that is
							used when taking photos. It was created by the Moving Picture Experts Group (MPEG) in 2015.
							It
							is an alternative to JPEG that uses old and modern compression to shrink file format to
							storage sizes
							below JPEG, whilst keeping similar image quality.
						</p>
						<section class="pros-cons">
							<article class="pros pros-cons-box">
								<h4>Pros</h4>
								<ul>
									<li>Occupies less storage than JPEG files</li>
									<li>Supports up to 16-bit colour schemes</li>
									<li>Proprietary features like Live Photos are possible</li>
								</ul>
							</article>
							<article class="cons pros-cons-box">
								<h4>Cons</h4>
								<ul>
									<li>Lacks compatibility</li>
									<li>Not supported by most common browsers</li>
									<li>Not open source</li>
								</ul>
							</article>
						</section>
					</article>
				</section>
			</section>
			<section class="topic-section">
				<figure class="other-tech-figure">
					<img class="other-tech-image" src="images/gif.webp" alt="Art by Europeana">
					<figcaption>Art by <a target="_blank" href="https://unsplash.com/@europeana">Europeana</a></figcaption>
				</figure>
				<section class="section-information">

					<article class="information-container">


						<h3 id="gif">GIF .gif</h3>
						<p>
							Short for Graphics interchange format,
							it was created in 1987 by Steve Wilhite as a lossless raster image file that can store small
							animations as well by combining images or frames together. It supports 8 bits per pixel and
							contain 256 indexed colours.
						</p>
						<section class="pros-cons">
							<article class="pros pros-cons-box">
								<h4>Pros</h4>
								<ul>
									<li>Small File size equivalent of JPEG despite being animated</li>
									<li>Animated pictures</li>
								</ul>
							</article>
							<article class="cons pros-cons-box">
								<h4>Cons</h4>
								<ul>
									<li>8bit colour scheme</li>
								</ul>
							</article>
						</section>
					</article>
				</section>
			</section>
			<section class="topic-section">
				<figure class="other-tech-figure">
					<img class="other-tech-image" src="images/bmp.webp" alt="a photo took by Enzo Tommasi">
					<figcaption>A photo took by <a target="_blank" href="https://unsplash.com/@11x11">Enzo Tommasi</a></figcaption>
				</figure>
				<section class="section-information">

					<article class="information-container">


						<h3 id="bmp">BMP - .bmp</h3>
						<p>
							Short for Microsoft Windows Bitmap format, BMP is a raster graphics image format designed to
							store bitmap digital images independently of display devices. Created in 1995 by Microsoft,
							it is a large, raw, high quality image format that supports various colour depths, alpha
							channels,
							colour profiles and optional data compression.
						</p>
						<section class="pros-cons">
							<article class="pros pros-cons-box">
								<h4>Pros</h4>
								<ul>
									<li>Supports optional data compression</li>
									<li>High quality images</li>
									<li>Large colour spectrum supported</li>
									<li>Supports alpha channels and opacity</li>
								</ul>
							</article>
							<article class="cons pros-cons-box">
								<h4>Cons</h4>
								<ul>
									<li>Large file size</li>
								</ul>
							</article>
						</section>
					</article>
				</section>
			</section>
			<section class="comparison-section">
				<h3> Table for Comparison </h3>
				<table class="information-table">
					<thead>
						<tr>
							<th></th>
							<th>Browser Support</th>
							<th>Image Quality</th>
							<th>File Size</th>
							<th>Compression Type</th>
							<th>Colour Support (bits)</th>
							<th>Colour Support (RGB,CMYK)</th>
							<th>Animated Picture Support</th>
							<th>Gamma Support</th>
							<th>Opacity Support</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>PNG - .png </td>
							<td>Some</td>
							<td>High</td>
							<td>Medium</td>
							<td>Lossless</td>
							<td>24 bit</td>
							<td>RGB</td>
							<td>No</td>
							<td>Yes</td>
							<td>Yes</td>
						</tr>
						<tr>
							<td>TIFF - .tif/.tiff </td>
							<td>No</td>
							<td>High</td>
							<td>Large</td>
							<td>Lossless</td>
							<td>32 bit</td>
							<td>RGB, CMYK</td>
							<td>No</td>
							<td>Yes</td>
							<td>Yes</td>
						</tr>
						<tr>
							<td>HEIF - .heic </td>
							<td>No</td>
							<td>High</td>
							<td>Low</td>
							<td>Lossless &#38; Lossy</td>
							<td>16 bit</td>
							<td>RGB</td>
							<td>Yes</td>
							<td>No</td>
							<td>Yes</td>
						</tr>
						<tr>
							<td>PNG - .png </td>
							<td>Some</td>
							<td>High</td>
							<td>Medium</td>
							<td>Lossless</td>
							<td>24 bit</td>
							<td>RGB</td>
							<td>No</td>
							<td>Yes</td>
							<td>Yes</td>
						</tr>
						<tr>
							<td>GIF - .gif </td>
							<td>Some</td>
							<td>High</td>
							<td>Medium</td>
							<td>Lossless</td>
							<td>24 bit</td>
							<td>RGB</td>
							<td>No</td>
							<td>Yes</td>
							<td>Yes</td>
						</tr>
					</tbody>
				</table>
			</section>
		</section>
	</section>
	<section class="additional-content">
		<aside>
			<h2>Acronyms</h2>
			<dl>
				<dt>JPEG</dt>
				<dd>Joint Photographic Experts Group</dd>
				<dt>PNG</dt>
				<dd>Portable Networks Group</dd>
				<dt>TIFF</dt>
				<dd>Tag Image File Format</dd>
				<dt>HEIF</dt>
				<dd>High Efficiency Image Format</dd>
				<dt>GIF</dt>
				<dd>Graphics Interchange Format</dd>
				<dt>BMP</dt>
				<dd>Microsoft Windows Bitmap</dd>
			</dl>
		</aside>
		<section class="reference">
			<h2>Topic References</h2>

			<p>Belchev B 2019, Black and gray graffiti wall art, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/fRBpWLAcWIY">https://unsplash.com/photos/fRBpWLAcWIY</a>&#62;
			</p>
			
			<p>Bogulov V 2021, HD Photo, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/cZveUvrezvY">https://unsplash.com/photos/cZveUvrezvY</a>&#62;
			</p>
			
			<p>Europeana 2020, HD photo, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/y0QxHKNER9Y">https://unsplash.com/photos/y0QxHKNER9Y</a>&#62;
			</p>
			
			<p> Gregerson, E 2022, JPEG, Encyclopaedia Britannica, viewed 17 March 2022 </p>
			<p>&#60;<a 
				target="_blank" href="https://www.britannica.com/technology/JPEG">https://www.britannica.com/technology/JPEG</a>&#62;
			</p>

			<p>Kurbatov A 2022, Unfathomable Fields, Deviant Art, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://www.deviantart.com/antonkurbatov/art/Unfathomable-fields-910386676">https://www.deviantart.com/antonkurbatov/art/Unfathomable-fields-910386676</a>&#62;
			</p>
			
			<p>Kurnaz E 2017, Multicolored hallway photo, Unsplash, viewed 17 March 2022 </p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/RnCPiXixooY">https://unsplash.com/photos/RnCPiXixooY</a>&#62;
			</p>
			
			<p>Lee S 2021, HD Photo, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/hbFKxsIqclc">https://unsplash.com/photos/hbFKxsIqclc</a>&#62;
			</p>
			
			<p>Leung J 2017, Multicolored wall art photo, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/wHddViTmSvA">https://unsplash.com/photos/wHddViTmSvA</a>&#62;
			</p>
			
			<p> No Surname, L 2022, HEIF/HEIC file format, Capture One, viewed 17 March 2022</p>
			<p>&#60;<a
					target="_blank" href="https://support.captureone.com/hc/en-us/articles/360016552258-HEIF-HEIC-file-format">https://support.captureone.com/hc/en-us/articles/360016552258-HEIF-HEIC-file-format</a>&#62;
			</p>
			
			<p> Robinson, J 2022, HEIF – What you need to know, Photo Review, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://www.photoreview.com.au/tips/shooting/heif-what-you-need-to-know/">https://www.photoreview.com.au/tips/shooting/heif-what-you-need-to-know/</a>&#62;
			</p>
			
			<p> Salvaggio, C 2020, What is Inside a JPEG File, viewed 17 March 2022</p>
			<p> &#60;<a
				target="_blank" href="https://www.imaging.org/site/IST/Resources/Imaging_Tutorials/What_s_Inside_a_JPEG_File/IST/Resources/Tutorials/Inside_JPEG.aspx?hkey=f9946f90-9f14-452d-897c-ac1612116e2d">https://www.imaging.org/site/IST/Resources/Imaging_Tutorials/What_s_Inside_a_JPEG_File/IST/Resources/Tutorials/Inside_JPEG.aspx?hkey=f9946f90-9f14-452d-897c-ac1612116e2d</a>&#62;
			</p>
			
			<p>Tommasi E 2019, Woman’s face graffiti photo, Unsplash, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://unsplash.com/photos/wlxJ4idMTUk">https://unsplash.com/photos/wlxJ4idMTUk</a>&#62;
			</p>
			
			<p> Unknown 2021, The GIF File Format, Prepressure, viewed 17 March 2022</p>
			<p> &#60;<a 
				target="_blank" href="https://www.prepressure.com/library/file-formats/gif">https://www.prepressure.com/library/file-formats/gif</a>&#62;
			</p>
			
			<p> Unknown 2022, Characteristics of HEIF format, Sony, viewed 17 March 2022 </p>
			<p>&#60;<a
				target="_blank" href="https://support.d-imaging.sony.co.jp/support/ilc/heif/01/en/index.html">https://support.d-imaging.sony.co.jp/support/ilc/heif/01/en/index.html</a>&#62;
			</p>
			
			<p> Unknown 2022, JPEG files, Adobe, viewed 17 March 2022 </p>
			<p>&#60;<a
				target="_blank" href="https://www.adobe.com/au/creativecloud/file-types/image/raster/jpeg-file.html">https://www.adobe.com/au/creativecloud/file-types/image/raster/jpeg-file.html</a>&#62;
			</p>
			
			<p>Unknown 2022, PNG Image Format – History, Features and Advantages, ByteScout, viewed 17 March 2022</p>
			<p>&#60;<a
				target="_blank" href="https://bytescout.com/blog/2014/07/png-image-format.html">https://bytescout.com/blog/2014/07/png-image-format.html</a>&#62;
			</p>
			
			<p> Unknown 2022, Tags for TIFF, DNG, and Related Specifications, Library of Congress, viewed 17 March 2022 </p>
			<p>&#60;<a
				target="_blank" href="https://www.loc.gov/preservation/digital/formats/content/tiff_tags.shtml">https://www.loc.gov/preservation/digital/formats/content/tiff_tags.shtml</a>&#62;
			</p>
			
			<p> Unknown 2022, Sustanability of Digital Formats: Planning for Library of Congress Collections, Library of
				Congress, viewed 17 March 2022 </p>
			<p>&#60;<a
				target="_blank" href="https://www.loc.gov/preservation/digital/formats/index.html">https://www.loc.gov/preservation/digital/formats/index.html</a>&#62;
			</p>
		</section>

	</section>
	<?php
    include_once('footer.inc');
    ?>
</body>

</html>