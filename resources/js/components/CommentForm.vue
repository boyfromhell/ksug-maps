<template>
  <form ref="form" @submit.prevent="handleSubmit">
    <fieldset
      class="flex-col flex"
      :disabled="state === 'loading'"
      :class="{'opacity-25': state === 'loading'}"
    >
      <input
        type="text"
        name="comment[author]"
        class="border-b border-black py-2 font-mono text-black mb-10 focus:outline-none transition w-full bg-gray-100 rounded-none"
        :required="true"
        placeholder="Your Name"
      />

      <input
        type="email"
        name="comment[email]"
        :required="true"
        class="border-b border-black py-2 font-mono text-black mb-10 focus:outline-none transition w-full bg-gray-100 rounded-none"
        placeholder="Your Email Address"
      />

      <textarea
        class="border border-black p-2 font-mono text-black mb-10 focus:outline-none transition w-full bg-gray-100 rounded-none shadow-none"
        name="comment[text]"
        placeholder="Message Text"
        :required="true"
        style="min-height: 15.625rem;"
      ></textarea>

      <clickable
        class="w-full text-center py-3 px-2 border border-black uppercase"
      >Submit Your Comment</clickable>
    </fieldset>
  </form>
</template>
<script>
import clickable from "./Clickable";
import axios from "axios";
import { formPost } from "../functions/helpers";

export default {
  components: {
    clickable
  },
  props: {
    postUrl: String
  },
  data() {
    return {
      state: "default"
    };
  },
  methods: {
    async handleSubmit() {
      this.state = "loading";

      let { data } = await formPost(this.postUrl, this.$refs.form);

      this.$refs.form.reset();

      this.$emit("comment-created", data);

      this.state = "default";
    }
  }
};
</script>