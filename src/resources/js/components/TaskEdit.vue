<script setup>
  import Button from './Button.vue'

  const props = defineProps({
    taskId: String
  })
</script>

<template>
  <v-sheet width="300" class="mx-auto">
    <v-form>
      <v-text-field
        label="番号"
        :model-value="taskId"
        readonly
      >
      </v-text-field>
      <v-text-field
        label="タイトル"
      ></v-text-field>
      <v-text-field
        label="内容"
      ></v-text-field>
      <v-text-field
        label="担当者"
      ></v-text-field>
      <Button block name="保存" />
  </v-form>
  </v-sheet>
</template>