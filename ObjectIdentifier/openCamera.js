let featureExtractor;
let classifier;
let video;
let loss;
let keyword;

function setup() {
    noCanvas();
}

async function openCamera() {
    var videoContainer = document.createElement('div');
    videoContainer.setAttribute('id', 'videoContainer');
    document.body.appendChild(videoContainer);
    video = createCapture(VIDEO);
    video.parent('videoContainer');
    video.size(320, 240);

    var predictButton = document.createElement('input');
    predictButton.setAttribute('type', 'button');
    predictButton.setAttribute('id', 'predictButton');
    predictButton.textContent = "Start Detecting";
    document.body.appendChild(predictButton);

    var predictionText = document.createElement('span');
    predictionText.setAttribute('id', 'predictionText');
    document.body.appendChild(predictionText);

    var searchButton = document.createElement('input');
    searchButton.setAttribute('type', 'button');
    searchButton.setAttribute('id', 'searchButton');
    searchButton.textContent = "Search for this item";
    document.body.appendChild(searchButton);

    featureExtractor = ml5.featureExtractor('MobileNet', modelReady);
    const options = { numLabels: 7 };
    classifier =  await featureExtractor.classification(video, options);

     // Predict Button
    predictButton = select('#predictButton');
    predictButton.mousePressed(classify);

    searchButton = select('#searchButton');
    searchButton.mousePressed(searchItems);

}

function searchItems() {
    var itemToSearch = keyword;
    console.log(itemToSearch);
    video.stop();
}

function modelReady() {
	classifier.load('./model/model.json', function() {
    console.log('Custom Model Loaded!');
   });
}

function classify() {
  classifier.classify(gotResults);
}

function gotResults(err, results) {
  // Display any error
  if (err) {
    console.error(err);
  }
  if (results && results[0]) {
    select('#predictionText').html(results[0].label);
//    select('#confidence').html(results[0].confidence.toFixed(2) * 100 + '%');
    keyword = results[0].label;
    console.log(keyword);
    classify();
  }
}