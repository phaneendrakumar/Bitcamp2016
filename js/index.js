(function() {
  var Particle, particleCount, particles, sketch, z;
  
  sketch = Sketch.create();
  
  particles = [];

  particleCount = 250;

  sketch.mouse.x = sketch.width / 2;

  sketch.mouse.y = sketch.height / 2;
//Using hsla for color: black
  sketch.strokeStyle = 'hsla(240, 50%, 50%, 0.1)';
  
  //sketch.globalCompositeOperation = 'darken';

  Particle = function() {
    this.x = random(sketch.width);
    this.y = random(sketch.height, sketch.height * 2);
    this.vx = 0;
    this.vy = -random(1, 10) / 5;
    this.radius = this.baseRadius = 0.01; // current radius for particles
    this.maxRadius = 20; // max radius on expansion
    this.threshold = 150; //closest dist to compare for a particle
    return this.hue = 0; // updated hue for expanded particle
  };

  Particle.prototype = {
    update: function() {
      var dist, distx, disty, radius;
      // calculate dist of x and y from cursor position
      distx = this.x - sketch.mouse.x;
      disty = this.y - sketch.mouse.y;
      // calculate distance
      dist = sqrt(distx * distx + disty * disty);
      if (dist < this.threshold) {
    	  // expand
        radius = this.baseRadius + ((this.threshold - dist) / this.threshold) * this.maxRadius;
        this.radius = radius > this.maxRadius ? this.maxRadius : radius;
      } else {
    	  //do nothing to radius
        this.radius = this.baseRadius;
      }
      this.vx += (random(100) - 50) / 1000;
      this.vy -= random(1, 20) / 10000;
      this.x += this.vx;
      this.y += this.vy;
      if (this.x < -this.maxRadius || this.x > sketch.width + this.maxRadius || this.y < -this.maxRadius) {
        this.x = random(sketch.width);
        this.y = random(sketch.height + this.maxRadius, sketch.height * 2);
        this.vx = 0;
        return this.vy = -random(1, 10) / 5;
      }
    },
    render: function() {
      sketch.beginPath();
      sketch.arc(this.x, this.y, this.radius, 0, TWO_PI);
      sketch.closePath();
      sketch.fillStyle = 'hsla(' + this.hue + ', 0%, 75%, 1)';
      sketch.fill();
      return sketch.stroke();
    }
  };

  z = particleCount;

  while (z--) {
    particles.push(new Particle());
  }

  sketch.update = function() {
    var i, results;
    i = particles.length;
    results = [];
    while (i--) {
      results.push(particles[i].update());
    }
    return results;
  };

  sketch.draw = function() {
    var i, results;
    i = particles.length;
    results = [];
    while (i--) {
      results.push(particles[i].render());
    }
    return results;
  };

}).call(this);