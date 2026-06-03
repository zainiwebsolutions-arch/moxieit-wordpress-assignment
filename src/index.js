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
