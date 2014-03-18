(function() {
  $(function() {
    return $("#comparisonForm").submit(function(e) {
      var ourCost, ourPrice, theSavings, theirCost;
      ourPrice = $("#inputCost").val();
      ourCost = (ourPrice * .3).toFixed(2);
      theirCost = (ourPrice * .5).toFixed(2);
      theSavings = (theirCost - ourCost).toFixed(2);
      $("#ourCost").val(ourCost);
      $("#theirCost").val(theirCost);
      $("#theSavings").val(theSavings);
      return e.preventDefault();
    });
  });

}).call(this);
