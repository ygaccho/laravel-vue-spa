<script setup>
  import Button from './Button.vue'
</script>

<template>
  <v-sheet width="300" class="mx-auto">
    <v-form>
      <v-text-field
        label="タイトル"
      ></v-text-field>
      <v-text-field
        label="内容"
      ></v-text-field>
      <v-text-field
        label="担当者"
      ></v-text-field>
      <Button name="追加" block class="mt-2"/>
  </v-form>
  </v-sheet>
</template>