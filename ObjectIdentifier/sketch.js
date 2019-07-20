// Copyright (c) 2018 ml5
//
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT

/* ===
ml5 Example
Image Classification using Feature Extraction with MobileNet. Built with p5.js
This example uses a callback pattern to create the classifier
=== */

let featureExtractor;
let classifier;
let video;
let loss;
let cerealImages = 0;
let alchoholImages = 0;
let shampooImages = 0;
let milkImages = 0;
let airfreshnerImages = 0;
let detergentImages = 0;
let fabricSoftenerImages = 0;

function setup() {
  noCanvas();
  // Create a video element
  video = createCapture(VIDEO);
  video.parent('videoContainer');
  video.size(320, 240);

  // Extract the already learned features from MobileNet
  featureExtractor = ml5.featureExtractor('MobileNet', modelReady);

  // Create a new classifier using those features and give the video we want to use
  const options = { numLabels: 3 };
  classifier = featureExtractor.classification(video, options);
  // Set up the UI buttons
  setupButtons();
}

// A function to be called when the model has been loaded
function modelReady() {
  select('#modelStatus').html('MobileNet Loaded!');
  // If you want to load a pre-trained model at the start
  // classifier.load('./model/model.json', function() {
  //   select('#modelStatus').html('Custom Model Loaded!');
  // });
}

// Classify the current frame.
function classify() {
  classifier.classify(gotResults);
}

// A util function to create UI buttons
function setupButtons() {

  buttonA = select('#cerealButton');
  buttonA.mousePressed(function() {
    classifier.addImage('cereal');
    select('#amountOfCerealImages').html(cerealImages++);
  });

  buttonB = select('#alchoholButton');
  buttonB.mousePressed(function() {
    classifier.addImage('alchohol');
    select('#amountOfAlcoholImages').html(alchoholImages++);
  });

  buttonC = select('#shampooButton');
  buttonC.mousePressed(function() {
    classifier.addImage('shampoo');
    select('#amountOfShampooImages').html(shampooImages++);
  });
  
  buttonD = select('#milkButton');
  buttonD.mousePressed(function() {
    classifier.addImage('milk');
    select('#amountOfMilkImages').html(milkImages++);
  });
  
  buttonE = select('#airfreshnerButton');
  buttonE.mousePressed(function() {
    classifier.addImage('air freshner');
    select('#amountOfAirFreshnerImages').html(airfreshnerImages++);
  });
  
  buttonF = select('#detergentButton');
  buttonF.mousePressed(function() {
    classifier.addImage('detergent');
    select('#amountOfDetergentImages').html(airfreshnerImages++);
  });
  
  buttonG = select('#fabricSoftenerButton');
  buttonG.mousePressed(function() {
    classifier.addImage('fabric softener');
    select('#amountOfSoftenerImages').html(fabricSoftenerImages++);
  });
  
  
  
  
  // Train Button
  train = select('#train');
  train.mousePressed(function() {
    classifier.train(function(lossValue) {
      if (lossValue) {
        loss = lossValue;
        select('#loss').html('Loss: ' + loss);
      } else {
        select('#loss').html('Done Training! Final Loss: ' + loss);
      }
    });
  });

  // Predict Button
  buttonPredict = select('#buttonPredict');
  buttonPredict.mousePressed(classify);

  // Save model
  saveBtn = select('#save');
  saveBtn.mousePressed(function() {
    classifier.save();
  });

  // Load model
  loadBtn = select('#load');
  loadBtn.changed(function() {
    classifier.load(loadBtn.elt.files, function() {
      select('#modelStatus').html('Custom Model Loaded!');
    });
  });
}

// Show the results
function gotResults(err, results) {
  // Display any error
  if (err) {
    console.error(err);
  }
  if (results && results[0]) {
    select('#result').html(results[0].label);
    select('#confidence').html(results[0].confidence.toFixed(2) * 100 + '%');
    classify();
  }
}