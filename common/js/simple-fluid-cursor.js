/**
 * Simple Fluid Cursor Effect
 * CSS와 JavaScript를 사용한 안정적인 유체 커서 효과
 */
class SimpleFluidCursor {
  constructor(options = {}) {
    this.options = {
      size: options.size || 20,
      color: options.color || "#ff000b",
      trailLength: options.trailLength || 15,
      speed: options.speed || 0.1,
      ...options,
    };

    this.mouse = { x: 0, y: 0 };
    this.cursor = { x: 0, y: 0 };
    this.trails = [];
    this.isVisible = false;
    this.isHovering = false;

    this.init();
  }

  init() {
    this.createElements();
    this.bindEvents();
    this.animate();
  }

  createElements() {
    // Create cursor element
    this.cursorEl = document.createElement("div");
    this.cursorEl.className = "fluid-cursor";
    this.cursorEl.style.cssText = `
            position: fixed;
            width: ${this.options.size}px;
            height: ${this.options.size}px;
            background: ${this.options.color};
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            mix-blend-mode: difference;
            will-change: transform;
        `;
    document.body.appendChild(this.cursorEl);

    // Create trail elements
    for (let i = 0; i < this.options.trailLength; i++) {
      const trail = document.createElement("div");
      trail.className = "fluid-trail";
      const size = this.options.size * (1 - i * 0.05);
      const opacity = Math.max(0, 1 - i * 0.07);

      trail.style.cssText = `
                position: fixed;
                width: ${size}px;
                height: ${size}px;
                background: ${this.options.color};
                border-radius: 50%;
                pointer-events: none;
                z-index: ${9999 - i};
                opacity: 0;
                transition: opacity 0.3s ease;
                mix-blend-mode: difference;
                will-change: transform;
            `;
      document.body.appendChild(trail);
      this.trails.push({
        element: trail,
        x: 0,
        y: 0,
        targetOpacity: opacity,
      });
    }
  }

  bindEvents() {
    document.addEventListener("mousemove", (e) => {
      this.mouse.x = e.clientX;
      this.mouse.y = e.clientY;
      this.show();
    });

    document.addEventListener("mouseleave", () => this.hide());

    document
      .querySelectorAll(
        'a, button, input[type="submit"], input[type="button"], .hover-target'
      )
      .forEach((el) => {
        el.addEventListener("mouseenter", () => this.onHover());
        el.addEventListener("mouseleave", () => this.onLeave());
      });
  }

  animate() {
    this.updateCursor();
    this.updateTrails();
    requestAnimationFrame(() => this.animate());
  }

  updateCursor() {
    this.cursor.x += (this.mouse.x - this.cursor.x) * this.options.speed;
    this.cursor.y += (this.mouse.y - this.cursor.y) * this.options.speed;
    this.cursorEl.style.transform = `translate(${
      this.cursor.x - this.options.size / 2
    }px, ${this.cursor.y - this.options.size / 2}px)`;
  }

  updateTrails() {
    let prevX = this.cursor.x;
    let prevY = this.cursor.y;

    this.trails.forEach((trail, i) => {
      const nextX = this.cursor.x + (prevX - this.cursor.x) * (i * 0.05);
      const nextY = this.cursor.y + (prevY - this.cursor.y) * (i * 0.05);

      trail.x += (nextX - trail.x) * (this.options.speed * 1.2);
      trail.y += (nextY - trail.y) * (this.options.speed * 1.2);

      trail.element.style.transform = `translate(${
        trail.x - trail.element.offsetWidth / 2
      }px, ${trail.y - trail.element.offsetHeight / 2}px)`;
      trail.element.style.opacity = this.isVisible ? trail.targetOpacity : 0;

      prevX = trail.x;
      prevY = trail.y;
    });
  }

  show() {
    if (!this.isVisible) {
      this.isVisible = true;
      this.cursorEl.style.opacity = 1;
    }
  }

  hide() {
    if (this.isVisible && !this.isHovering) {
      this.isVisible = false;
      this.cursorEl.style.opacity = 0;
      this.trails.forEach((trail) => (trail.element.style.opacity = 0));
    }
  }

  onHover() {
    this.isHovering = true;
    this.cursorEl.style.transform = `translate(${
      this.cursor.x - this.options.size / 2
    }px, ${this.cursor.y - this.options.size / 2}px) scale(1.5)`;
    this.cursorEl.style.background = "#fff"; // Change color on hover
    this.trails.forEach((trail) => (trail.element.style.background = "#fff"));
  }

  onLeave() {
    this.isHovering = false;
    this.cursorEl.style.transform = `translate(${
      this.cursor.x - this.options.size / 2
    }px, ${this.cursor.y - this.options.size / 2}px) scale(1)`;
    this.cursorEl.style.background = this.options.color; // Revert color
    this.trails.forEach(
      (trail) => (trail.element.style.background = this.options.color)
    );
  }

  destroy() {
    if (this.cursorEl) {
      this.cursorEl.remove();
    }
    this.trails.forEach((trail) => trail.element.remove());
  }
}

// Initialize the FluidCursor when the DOM is ready
document.addEventListener("DOMContentLoaded", function () {
  // Only enable on desktop devices
  if (window.innerWidth > 768) {
    try {
      const fluidCursor = new SimpleFluidCursor({
        size: 20,
        color: "#ff000b",
        trailLength: 15,
        speed: 0.1,
      });

      // Store reference globally for potential cleanup
      window.fluidCursor = fluidCursor;
    } catch (error) {
      console.warn("Failed to initialize fluid cursor:", error);
    }
  }
});
