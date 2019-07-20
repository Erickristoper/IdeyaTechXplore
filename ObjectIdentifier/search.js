let featureExtractor;
let classifier;
let video;
let loss;
let keyword;

function setup() {
  noCanvas();
  // Create a video element
  video = createCapture(VIDEO);
  video.parent('videoContainer');
  video.size(320, 240);

  featureExtractor = ml5.featureExtractor('MobileNet', modelReady);
  
  const options = { numLabels: 7 };
  classifier = featureExtractor.classification(video, options);

  setupButtons();
}

function modelReady() {
	console.log('Mobilenet loaded!');
	classifier.load('./model/model.json', function() {
    console.log('Custom Model Loaded!');
   });
}

function setupButtons() {

    buttonSearch = select('#buttonSearch');
    buttonSearch.mousePressed(function() {
        console.log("Search for " + keyword);
        document.getElementById("itemname").value = keyword;
//        searchItem();
    });

    // Predict Button
    buttonPredict = select('#buttonPredict');
    buttonPredict.mousePressed(classify);

}

// Classify the current frame.
function classify() {
  classifier.classify(gotResults);
}

function gotResults(err, results) {
  // Display any error
  if (err) {
    console.error(err);
  }
  if (results && results[0]) {
    select('#result').html(results[0].label);
    keyword = results[0].label;
    classify();
  }
}