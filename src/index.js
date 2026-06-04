import { registerBlockType } from "@wordpress/blocks";

registerBlockType("moxieit/practice-areas", {
  edit() {
    return (
      <div>
        <h3>Practice Areas Block</h3>
        <p>This block displays the latest Practice Areas.</p>
      </div>
    );
  },
  save() {
    return null;
  },
});

registerBlockType("moxieit/blog-grid", {
  edit() {
    return (
      <div>
        <h3>Blog Grid Block</h3>
        <p>This block displays the latest Blog Posts.</p>
      </div>
    );
  },
  save() {
    return null;
  },
});

registerBlockType("moxieit/consultation-form", {
  edit() {
    return (
      <div>
        <h3>Consultation Form Block</h3>
        <p>Displays Contact Form 7 consultation form.</p>
      </div>
    );
  },
  save() {
    return null;
  },
});

registerBlockType("moxieit/hero-slider", {
  edit() {
    return (
      <div>
        <h3>Hero Slider Block</h3>
        <p>Hero Banner Section</p>
      </div>
    );
  },
  save() {
    return null;
  },
});

registerBlockType("moxieit/about-us", {
  edit() {
    return (
      <div>
        <h3>About Us Block</h3>
        <p>Displays About Us Section</p>
      </div>
    );
  },
  save() {
    return null;
  },
});
