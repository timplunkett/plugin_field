<?php

/**
 * @file
 * Contains \Drupal\plugin_field\Plugin\Field\FieldType\PluginItemInterface.
 */

namespace Drupal\plugin_field\Plugin\Field\FieldType;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Field\FieldItemInterface;

/**
 * Defines a plugin field item.
 */
interface PluginItemInterface extends FieldItemInterface {

  /**
   * Creates a plugin instance.
   *
   * @param string $plugin_id
   * @param mixed[] $plugin_configuration
   *
   * @return \Drupal\Component\Plugin\PluginInspectionInterface|null
   *   A plugin instance or NULL if there was no plugin ID.
   */
  public function createContainedPluginInstance($plugin_id, array $plugin_configuration = []);

  /**
   * Gets the instantiated plugin.
   *
   * @return \Drupal\Component\Plugin\PluginInspectionInterface|null
   *   The plugin or NULL if no plugin was set yet.
   */
  public function getContainedPluginInstance();

  /**
   * Sets the instantiated plugin.
   *
   * @param \Drupal\Component\Plugin\PluginInspectionInterface $plugin_instance
   *
   * @return $this
   */
  public function setContainedPluginInstance(PluginInspectionInterface $plugin_instance);

  /**
   * Gets the plugin ID.
   *
   * @return string
   */
  public function getContainedPluginId();

  /**
   * Sets the plugin ID.
   *
   * @param string $plugin_id
   *
   * @return $this
   */
  public function setContainedPluginId($plugin_id);

  /**
   * Sets the plugin configuration.
   *
   * @return mixed[]
   */
  public function getContainedPluginConfiguration();

  /**
   * Sets the plugin configuration.
   *
   * @param mixed[] $plugin_configuration
   *
   * @return $this
   */
  public function setContainedPluginConfiguration(array $plugin_configuration);

}
