var url = 'http://localhost:8000/';

casper.test.begin('Register controller', 3, function(test) {

  casper.start(url + 'register', function() {
    casper.waitForSelector('#submit', function() {
      test.assertSelectorHasText('#submit', 'Submit', 'is in English');
    });
  });

  casper.thenOpen(url + 'language/set/bulgarian');

  casper.thenOpen(url + 'register', function() {
    casper.waitForSelector('#submit', function() {
      test.assertSelectorHasText('#submit', 'Изпрати', 'is in Bulgarian');
    });
  });

  casper.thenOpen(url + 'language/set/korean');

  casper.thenOpen(url + 'register', function() {
    casper.waitForSelector('#submit', function() {
      test.assertSelectorHasText('#submit', 'Submit', 'is in English');
    });
  });

  casper.run(function() {
    test.done();
  });


});
